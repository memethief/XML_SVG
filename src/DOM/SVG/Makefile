# Makefile to turn DOM definitions into PHP classes

DOMSECTIONS = animate color coords extend filters fonts interact linking \
							masking metadata painting paths pservers script shapes struct \
							styling text types

default: all

DOMDIR = dom
PHPDIR = php
HTMLDIR = html
SCRIPTDIR = scripts
$(DOMDIR)/% : | $(DOMDIR)
$(PHPDIR)/% : | $(PHPDIR)
$(HTMLDIR)/% : | $(HTMLDIR)
DIRS = $(PHPDIR) $(HTMLDIR) $(DOMDIR)
DOMDEFINITIONS = $(addprefix $(DOMDIR)/,$(addsuffix .dom,$(DOMSECTIONS)))

$(DIRS) : 
	mkdir $@

$(DOMDIR)/%.dom : $(HTMLDIR)/%.html
	sed -nrf $(SCRIPTDIR)/htmlmung.sed < $< > $@

$(HTMLDIR)/%.html :
	wget http://www.w3.org/TR/SVG11/$*.html -O $@

$(PHPDIR)/%.php : $(DOMDIR)/%.dom Makefile
	sed -nrf $(SCRIPTDIR)/parsephp.sed < $<

all-dom : $(DIRS) $(DOMDEFINITIONS)
all : 

clean:


