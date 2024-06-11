# Cornerhouse

A rebuild of the dental practice website using modern Drupal 10+.

### Local development
The environment is intended to use Podman instead of Docker. If you are not using `direnv`, you can load environment variables into your shell using the `source` command below. `podman-compose` will use the `.env` file regardless.

Set up the project as follows:

```bash
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
```
