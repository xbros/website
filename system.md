---
title: System
---

Ubuntu server 14.04 trusty

Permissions au groupe xbros :

sudo chmod -R g+w . public_html domains etc tmp

Clé ssh dans `~/.ssh/id_rsa` en permission 600.

Packages
========

### keychain
sudo apt-get install keychain

### git
sudo apt-get install git

### nodejs
sudo apt-get install nodejs npm

### ruby
```{bash}
sudo apt-get install sqlite3
sudo gem install rails bundler jekyll ruhoh
```

### cmake
sudo apt-get install cmake

### boost
sudo apt-get install libboost-all-dev

### texlive
sudo apt-get install texlive-latex-extra texlive-fonts-extra

### pandoc

```{bash}
wget https://github.com/jgm/pandoc/releases/download/1.16.0.2/pandoc-1.16.0.2-1-amd64.deb
sudo dpkg -i pandoc-1.16.0.2-1-amd64.deb
rm pandoc-1.16.0.2-1-amd64.deb
```

### R
https://cran.r-project.org/bin/linux/ubuntu/README

Ajouter à `/etc/apt/sources.list` :
```
#CRAN mirror for R
deb https://cran.univ-paris1.fr/bin/linux/ubuntu trusty/
```
```{bash}
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E084DAB9
sudo apt-get update
sudo apt-get install r-base r-base-dev
```

### shiny server
https://www.rstudio.com/products/shiny/download-server/

https://rstudio.github.io/shiny-server/latest/#install-shiny
```{bash}
sudo su - -c "R -e \"install.packages('shiny', repos='https://cran.rstudio.com/')\""
sudo apt-get install gdebi-core
wget https://download3.rstudio.org/ubuntu-12.04/x86_64/shiny-server-1.4.1.759-amd64.deb
sudo gdebi shiny-server-1.4.1.759-amd64.deb
```
