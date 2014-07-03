#!/bin/awk 
# Transform a .dom file into PHP classes

BEGIN { 
	outfile = ""
# useful shortcuts
	C1 = "/**"
	C2 = " * "
	C3 = " */"
	I1 = "\t"
	I2 = I1 I1
}

# beginning of the DOM definition
outfile == "" {
	#print "outside class definition"
# Syntax is: 
# ^interface <classname> [: <superclassname>[ {]|{]
	if ($1 == "interface") {
		parse_class_definition()
		outfile = "php/" class["name"] ".php"
		print "include_once('" class["name"] ".php');"
		print_file_header(outfile)
		print_class_begin(outfile)
# continue processing inside the class definition
	}
	next
} # end outfile == ""

outfile != "" {

# If we find a closing brace we end this class
	if ($0 ~ /^\}/) { 
		print_class_end(outfile)
# clean up
		close(outfile)
		outfile = ""
		next
	}

# member definitions. Syntax is:
# ^[readonly ]attribute <type ...> <membername>[ setraises(<exception>)]
	if ($0 ~ /\yattribute\y/) {
		parse_attribute()
		print_attribute(outfile)
		next
	} # end attribute

# const definitions. Syntax is:
# ^const <type ...> <constname> = <value>
	if ($1 == "const") {
		parse_const()
		print_const(outfile)
		next
	} # end const

# function definitions. Syntax is:
# ^<returntype ...> <functionname>([in <argtype ...> <argname>[, in <argtype ...> <argname> ...]])[ raises(<exception>)]
	if ($0 ~ /^(\S.*\S) (\S+)\([^)]*\)( raises\([^)]+\))?/) {
		parse_function()
		print_function(outfile)
		next
	} # end function

# If we've gotten here the only thing left should be comments. Let's
# print them out
	print > outfile

} # end outfile != ""

END {
	#print "end parsing"
}

# Utility functions 

function print_file_header(outfile)
{
	print "<?php"                                                  > outfile
	print C1                                                       > outfile
	print C2 "W3C DOM-compliant SVG package"                       > outfile
	print C2                                                       > outfile
	print C2 "DOM compliance is currently in progress."            > outfile
	print C2 "For details on the SVG DOM see:"                     > outfile
	print C2 "@link{http://www.w3.org/TR/SVG/svgdom.html}"         > outfile
	print C2                                                       > outfile
	print C2 "@category XML"                                       > outfile
	print C2 "@author  David Leaman <david@davidleaman.ca>"        > outfile
	print C2 "@package PEAR2_XML_SVG"                              > outfile
	print C2 "@license http://www.fsf.org/copyleft/lgpl.html"      > outfile
	print C3                                                       > outfile
	print "namespace PEAR2\\XML\\SVG\\DOM;"                        > outfile
	print ""                                                       > outfile
}

function print_class_begin (outfile,    i, sep)
{
	# global class
	print C1                                                       > outfile
# Determine whether we are going to need an "Implements" clause
	if ("implements" in class) for (i in class["implements"])
		print C2 "@" class["inherit"], class["implements"][i]        > outfile
	print C3                                                       > outfile

	print class["type"], class["name"]                             > outfile
	if ("implements" in class) {
		sep = "\t" class["inherit"]
		for (i in class["implements"]) {
			printf "%s %s", sep, class["implements"][i]                > outfile
			sep = ", "
		}
		print ""                                                     > outfile
	}
	print "{"                                                      > outfile
}

function print_class_end (outfile)
{
	print "}"                                                      > outfile
	print ""                                                       > outfile
}

function print_attribute (outfile,    I, i)
{
# global attribute
	I = I1
	print I C1                                                     > outfile
	if (attribute["readonly"])
	print I C2 "read-only member"                                  > outfile
	print I C2 "@var", attribute["type"], attribute["name"]        > outfile
	if ("raises" in attribute)
		for (i in attribute["raises"])
			print I C2 "@throws", attribute["raises"][i]               > outfile
	print I C3                                                     > outfile

	print I "public $" attribute["name"] ";"                       > outfile
}

function print_const (outfile)
{
# global const
	I = I1
	print I C1                                                     > outfile
	print I C2 "@const", const["name"]                             > outfile
	print I C3                                                     > outfile
	print I "public static final $" const["name"] " = " const["value"] ";" > outfile
	print ""                                                       > outfile
}

function print_function (outfile,    a, argparts, I, i)
{
# global funcdef
	I = I1
	print I C1                                                     > outfile
	if ("args" in funcdef) for (a in funcdef["args"]) {
		split(funcdef["args"][a], argparts, "/")
		print I C2 "@param", argparts[1], "$" argparts[2]            > outfile
	}
	printf I C2 "@return "                                         > outfile
	print ("return" in funcdef ? funcdef["return"] : "void")       > outfile
	if ("raises" in funcdef) for (i in funcdef["raises"])
		print I C2 "@throws", funcdef["raises"][i]                   > outfile
	print I C3                                                     > outfile

	printf I "public function %s(", funcdef["name"]                > outfile
	if ("args" in funcdef) printf get_func_args(funcdef["args"])   > outfile
	print ");"                                                     > outfile
	print ""                                                       > outfile
}

function get_func_args(args,    argsep, a, type, argparts, ret)
{
	ret = ""
	argsep = ""
	for (a in args) {
		split(args[a], argparts, "/")
		ret = ret argsep
		type = argparts[1]
		if (type != tolower(type)) ret = ret type " "
		ret = ret "$" argparts[2]
		argsep = ", "
	}
	return ret
}

# Parse the current lines and store the interface definition in the "class"
# global variable
function parse_class_definition (    interfaces)
{
	delete class
	class["name"] = $2
	class["type"] = "interface" 
	class["inherit"] = "extends"
	interfaces = 0

	if (NF > 3) {
# At least one interface implemented
		class["implements"][++interfaces] = $4
		while ($NF != "{") {
			getline
			class["implements"][++interfaces] = $1
		}
	}
}

function parse_attribute (    typeindex, nameindex, raises, raiseparts, i)
{
		delete attribute
		typeindex = 2 # unless we have "readonly"
		nameindex = NF # unless we have "setraises"

# Is this attribute read-only?
		if ($1 == "readonly") { 
			attribute["readonly"] = 1 
			typeindex++
		}

# Does this attribute raise any exceptions?
		if ($nameindex ~ /setraises/) {
			raises = gensub(/setraises\(([^)]*)\)/, "\\1", 1, $nameindex)
			split(raises, raiseparts, /,\s*/)
			for (i in raiseparts) 
				attribute["raises"][i] = raiseparts[i]
			nameindex--
		}
		attribute["name"] = $nameindex

		while (typeindex < nameindex) {
			attribute["type"] = attribute["type"] $typeindex
			typeindex++
		}
}

function parse_const ()
{
	delete const
	typeindex = 3
	nameindex = NF-2

	const["name"] = $nameindex
	const["value"] = $NF

	while (typeindex < nameindex) {
		const["type"] = const["type"] $typeindex
		typeindex++
	}
}

# function definitions
# Syntax is:
# ^<returntype ...> <functionname>([in <argtype ...> <argname>[, in <argtype ...> <argname> ...]])[ raises(<exception>)]
function parse_function ()
{
		delete funcdef
# First let's strip out and save the function arguments
		parse_func_args()
# Now we remove and conserve any exceptions thrown
		parse_func_throws()
# Now the function is of the form:
# ^<returntype ...> <funcname>()$
		funcdef["name"] = gensub(/\(\)/, "", 1, $NF)

		typeindex = 1
		while (typeindex < NF) {
			funcdef["return"] = funcdef["return"] $typeindex
			typeindex++
		}
}

function parse_func_args (    matches, args, re) 
{
		re_funcargs = "\\(((in [^,)]+(, )?)+)\\)"
		if (0 < match($0, re_funcargs, matches)) {
			split(matches[1], args, ", ")
			for (a in args) {
				match(args[a], /in (.*) (\S+)/, argparts)
				funcdef["args"][a] = argparts[1] "/" argparts[2]
			}
		}
		sub(re_funcargs, "")
}

function parse_func_throws (    re, e, matches, exceptions)
{
	re = "raises\\(([^)]*)\\)"
	if (0 < match($0, re, matches)) {
		split(matches[1], exceptions, ", ")
		for (e in exceptions) {
			funcdef["raises"][e] = exceptions[e]
		}
	}
	sub(re, "")
}
