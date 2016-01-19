System
=======
Ubuntu server 14.04 trusty

Permissions au groupe xbros :

sudo chmod -R g+w . public_html domains etc tmp

Clé ssh dans `~/.ssh/id_rsa` en permission 600.

Admin
======
https://sd-63062.tspace.fr/phpmyadmin/

https://sd-63062.tspace.fr/munin/

https://sd-63062.tspace.fr:10000

Packages
========

### git
sudo apt-get install git

### nodejs
sudo apt-get install nodejs npm

### R
https://cran.r-project.org/bin/linux/ubuntu/README

Ajouter à `/etc/apt/sources.list` :
```
#CRAN mirror for R
deb https://cran.univ-paris1.fr/bin/linux/ubuntu trusty/
```
```
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E084DAB9
sudo apt-get update
sudo apt-get install r-base r-base-dev
```

### shiny server
https://www.rstudio.com/products/shiny/download-server/

https://rstudio.github.io/shiny-server/latest/#install-shiny
```
sudo su - -c "R -e \"install.packages('shiny', repos='https://cran.rstudio.com/')\""
sudo apt-get install gdebi-core
wget https://download3.rstudio.org/ubuntu-12.04/x86_64/shiny-server-1.4.1.759-amd64.deb
sudo gdebi shiny-server-1.4.1.759-amd64.deb
```

### texlive
sudo apt-get install texlive-latex-extra texlive-fonts-extra

### pandoc
sudo apt-get install pandoc=1.15.1.1~dfsg-2

### cmake
sudo apt-get install cmake

### boost
sudo apt-get install libboost-all-dev

### ruby
```
sudo apt-get install sqlite3
sudo gem install rails bundler jekyll ruhoh
```

