
MD = $(wildcard *.md)
RMD = $(wildcard *.rmd)
RRMD = $(wildcard *.Rmd)
INCLUDE = $(wildcard include/*.html)
CSS = $(wildcard *.css)
HTML = $(MD:.md=.html) $(RMD:.rmd=.html) $(RRMD:.Rmd=.html) 

all: html

html: $(HTML)

%.html: %.md $(INCLUDE) $(CSS)
	R --slave -e "rmarkdown::render('$<')"
	
%.html: %.rmd $(INCLUDE) $(CSS)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"
	
%.html: %.Rmd $(INCLUDE) $(CSS)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"

.PHONY: clean
clean:
	$(RM) $(HTML)
