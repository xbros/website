
MD = $(wildcard *.md)
RMD = $(wildcard *.rmd)
RRMD = $(wildcard *.Rmd)
INCLUDE = $(wildcard include/*.html) _output.yaml
HTML = $(MD:.md=.html) $(RMD:.rmd=.html) $(RRMD:.Rmd=.html) 

all: html

html: $(HTML)

%.html: %.md $(INCLUDE)
	R --slave -e "rmarkdown::render('$<')"
	
%.html: %.rmd $(INCLUDE)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"
	
%.html: %.Rmd $(INCLUDE)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"

.PHONY: clean
clean:
	$(RM) $(HTML)
