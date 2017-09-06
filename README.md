### Little Sprouts
Wordpress E-commerce website.

### Technologies
1. PHP (typed, when possible)
1. MySQL
1. Wordpress
1. Woocommerce
1. Docker
1. Docker Compose
1. Vim
1. Ansible
1. Ansible Vault (secured away from public)
1. Focus on perception test (for upgrading themes, plugins to check for regressions)

### Architecture

Developers will run docker containers combined using a docker compose manifest file.  Operations will deploy just the source code to a Dreamhost environment using ansible automation scripts.

I've set it as a challenge for myself to utilize vim editor so I can acquire that set up for my own local provisioning scripts.

Woocommerce will serve as the e-commerce backbone library, whereas Wordpress will be used to generate a dynamic site that can easily be deployed on most (if not all) shared hosting services (e.g. Dreamhost).  Wordpress allows developers to extend "parent" themes to base your "child" theme on.  Since wordpress will delete _all_ customizations during theme upgrades, having customizations in one location is beneficial in case any changes are required.
