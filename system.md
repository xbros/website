---
title: System
---

Ubuntu server 14.04 trusty

Permissions au groupe xbros :

chmod -R g+w . public_html domains etc tmp

Clé ssh dans `~/.ssh/id_rsa` en permission 600.

Packages
========

### keychain
apt-get install keychain

### git
apt-get install git

### nodejs
apt-get install nodejs npm

### ruby
```{bash}
apt-get -y update
apt-get -y install build-essential zlib1g-dev libssl-dev libreadline6-dev libyaml-dev
cd /tmp
wget http://ftp.ruby-lang.org/pub/ruby/2.3/ruby-2.3.0.tar.gz
tar -xvzf ruby-2.3.0.tar.gz
cd ruby-2.3.0/
./configure --prefix=/usr/local
make
make install

apt-get install sqlite3
gem install rails bundler jekyll ruhoh
```

### cmake
apt-get install cmake

### boost
apt-get install libboost-all-dev

### texlive
apt-get install texlive-latex-extra texlive-fonts-extra

### pandoc

```{bash}
wget https://github.com/jgm/pandoc/releases/download/1.16.0.2/pandoc-1.16.0.2-1-amd64.deb
dpkg -i pandoc-1.16.0.2-1-amd64.deb
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
apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E084DAB9
apt-get update
apt-get install r-base r-base-dev
```

### shiny server
https://www.rstudio.com/products/shiny/download-server/

https://rstudio.github.io/shiny-server/latest/#install-shiny
```{bash}
su - -c "R -e \"install.packages('shiny', repos='https://cran.rstudio.com/')\""
apt-get install gdebi-core
wget https://download3.rstudio.org/ubuntu-12.04/x86_64/shiny-server-1.4.1.759-amd64.deb
gdebi shiny-server-1.4.1.759-amd64.deb
```
