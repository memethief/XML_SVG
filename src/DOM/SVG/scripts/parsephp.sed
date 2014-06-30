#!/bin/sed -nr
# Transform a .dom file into PHP

# beginning of the DOM definition
/^interface/,/^\};/ {
  # Blank lines
	/^\s*$/ { d ; }

  # Class definitions
	/^interface/ {
  s/^interface (\S+) \{\s*$/class \1 {/ ; t end_block
  s/^interface (\S+) : (\S+) \{\s*$/class \1 extends \2 {/ ; t end_block
  s/^interface (\S+) : (\S+,)\s*$/class \1\nextends \2 / ; t begin_extends
	b end_block
	:begin_extends
	#= ; l
	{ P ; }
	s/^[^\n]*\n//
	#= ; l
	#b more_extends
	:more_extends
	N
	s/\n\s+(\S+) \{\s*$/\1/ ; t print_extends
	s/\n\s+(\S+,)\s*$/\1 /  ; t more_extends
	:print_extends
	#s/\r//g
	#s/\n//g
	s/^(extends .+)$/\t\1\n{/ ; t end_block
	}

  # member definitions
	/ attribute / {
		s/(attribute) SVG(\S+)\s*$/\1 \2/
		h
		// i\
\t/**
		/\breadonly\b/ i\
\t * read-only attribute
		s/^.*setraises\(([^\)]+)\).*$/\n\t * set throws \1/ ; t skip_empty_throw
		#=;l
		#g
		=;l
		b after_empty_throw
		:skip_empty_throw
		=;l
		G
		=;l
		:after_empty_throw
		s/(^|\n)[^\r\n]+attribute (\S.*\S) (\S+)( setraises.*)?;$/\n\t * @var \2 $\3/
		s|$|\n\t */|
		=;l
		G
		s/\n[^\r\n]*attribute (\S.*\S) (\S+)( setraises.*)?;\s*$/\n\tprivate $\2;\n/g
		b end_block
	}
  # function definitions
	/^\s*(\S.*\S)\s+\S+\([^)]*\)(\s+raises\([^)]+\))?;/ {
		h
		// i\
\t/**
		s/^(\s*)SVG(\S.*)$/\1\2/
		#=;l
		s/^\s*(\S.*\S)\s+\S+\s*\(.*$/\t * @return \1/
		#=;l
		G
		#=;l
		s/\n[^\r\n]+raises\(([^\)]+)\).*$/\n\t * @throws \1/
		#=;l
		s/(\n\s*)([^ \t*])(.*)$//
		s|$|\n\t */|
		p
		g
		s/([( ])in SVG(\S+) (\S+)([),])/\1\2 $\3\4/g
		s/([( ])in [^),]+ (\S+)([),])/\1$\2\3/g
		s/^\s*\S.*\S\s+(\S+)\(([^)]*)\)(\s+raises\(([^)]+)\))?;/\tpublic function \1(\2)/
		b end_block
	}
	:end_block
}
p
b
:inside_class
p
b
b
s/^(.*)$/>> \1/ p
:cont
s|^.*<pre [^>]*class="idl"[^>]*>(.*)|\1|
s|(.*)</pre>.*$|\1|
s|<[^>]+>||g
p

