
HTML_FILES := $(patsubst %.Rmd, %.html ,$(wildcard *.Rmd)) \
              $(patsubst %.md, %.html ,$(wildcard *.md))

all: clean html

INCLUDE_FILES: $(wildcard include/*.html)

html: $(HTML_FILES)

%.html: %.Rmd $(INCLUDE_FILES)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"

%.html: %.md $(INCLUDE_FILES)
	R --slave -e "set.seed(100);rmarkdown::render('$<')"

.PHONY: clean
clean:
	$(RM) $(HTML_FILES)

