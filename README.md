# Cornerhouse

A rebuild of the dental practice website using modern Drupal 10+.

### Local development
The environment is intended to use Podman instead of Docker. If you are not using `direnv`, you can load environment variables into your shell using the `source` command below. `podman-compose` will use the `.env` file regardless.

Set up the project as follows:

``` shell
# Clone the repo
git clone git@github.com:surreymagpie/cornerhouse
cd cornerhouse

source .env # if not using direnv

podman-compose up -d

# Set up aliases for drush, composer and php for working within the container
source .aliases.sh

# Install composer dependencies
composer install

# First-time install of drupal with minimal profile
drush site:install minimal --locale=en-gb \
  --db-url=mysql://$MYSQL_USER:$MYSQL_PASSWORD@db:3306/$MYSQL_DATABASE \
  --account-name="surreymagpie" --account-pass="secure_password" \
  --site-name="Cornerhouse Dental Practice" --yes

# Import configuration
drush config:set system.site uuid 70c03538-1ac9-4d8f-ba04-b1696dedc05a
drush config:import --yes
drush cache:rebuild
```
