# Makefile to turn DOM definitions into PHP classes

DOMSECTIONS = animate color coords extend filters fonts interact linking \
							masking metadata painting paths pservers script shapes struct \
							styling text types svgdom

default: all

DOMDIR = dom
PHPDIR = php
HTMLDIR = html
SCRIPTDIR = scripts
TMPLDIR = tmpl
$(DOMDIR)/% : | $(DOMDIR)
$(PHPDIR)/% : | $(PHPDIR)
$(HTMLDIR)/% : | $(HTMLDIR)
$(TMPLDIR)/% : | $(TMPLDIR)
DIRS = $(PHPDIR) $(HTMLDIR) $(DOMDIR) $(TMPLDIR)
DOMDEFINITIONS = $(addprefix $(DOMDIR)/,$(addsuffix .dom,$(DOMSECTIONS)))
PHPDEFINITIONS = $(addprefix $(PHPDIR)/,$(addsuffix .php,$(DOMSECTIONS)))

$(DIRS) : 
	mkdir $@

$(DOMDIR)/%.dom : $(HTMLDIR)/%.html
	sed -nrf $(SCRIPTDIR)/htmlmung.sed < $< > $@

$(HTMLDIR)/%.html : $(HTMLDIR)
	wget http://www.w3.org/TR/SVG11/$*.html -O $@

# Do some pattern replacement on the DOM file:
$(DOMDIR)/%.replaced : $(DOMDIR)/%.dom $(SCRIPTDIR)/parsephp.sed | $(DOMDIR)
	sed -rf $(word 2, $^) < $< > $@

$(PHPDIR)/%.php : $(TMPLDIR)/%.tmpl $(DOMDIR)/%.replaced $(SCRIPTDIR)/parsephp.awk | $(PHPDIR)
	cp $(word 1,$^) $@
	awk -f $(word 3,$^) < $(word 2,$^) >> $@

$(TMPLDIR)/interfaces.tmpl : Makefile | $(TMPLDIR)
	{ \
		echo "<?php " ; \
		echo "/** " ; \
		echo " * Include all the SVG type category files, which " ; \
		echo " * in turn include the various interface files " ; \
		echo " */ " ; \
		echo ; \
	} > $@

$(TMPLDIR)/%.tmpl : Makefile | $(TMPLDIR)
	{ \
		echo "<?php " ; \
		echo "/** " ; \
		echo " * Include all the SVG interfaces in the '$*' category " ; \
		echo " */ " ; \
		echo ; \
	} > $@

interfaces.php : $(TMPLDIR)/interfaces.tmpl $(PHPDEFINITIONS)
	cp $< $@
	for file in $(wordlist 2,$(words $^),$^) ; \
		do echo "require_once('$$file');" ; \
	done >> $@

all-dom : $(DOMDEFINITIONS)
all-php : interfaces.php
all : all-php

clean: clean-php clean-tmp

clean-php: 
	- rm $(PHPDIR)/*

clean-tmp:
	- rm $(DOMDIR)/*.replaced


