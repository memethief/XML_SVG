#!/bin/sed -nr
# Transform a .dom file into PHP

# Remove all trailing semicolons
s/;$//
# Remove all leading and trailing space
s/^[ \t]+|[ \t]+$//g
# Remove all blank lines
/^$/ { d ; }
# Rename classes to remove leading "SVG"
#s/\bSVG(\S+)\b/\1/g

# beginning of the DOM definition
# Syntax is: 
# ^interface <classname> (: <superclassname>(,| {)|{)
/^interface/,/^\};/ {

  # Class definitions
	/^interface.*\{$/ {
		b
	}

  # Class definitions
	/^interface/,/\{$/ {
# Remove any trailing commas:
		s/,$//
		b
	}

# constant definitions
	/^const/ {
		b
	}

  # member definitions
	/\battribute\b/ {
		b
	}

  # function definitions
	/^\s*(\S.*\S)\s+\S+\([^)]*\)(\s+raises\([^)]+\))?;/ {
		b
	}

# none of the above; comment this line out.
	s|^(\s*//)+|//|g
}


