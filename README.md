# Install

```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
Add it to `~/.zshrc` or `~/.bashrc`
```shell
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
After that
```shell
cp .env.example .env
sail artisan key:generate
sail up -d
sail artisan migrate
```
### For change port
add `APP_PORT=82` to your `.env` and then
```shell
sail up -d --build
```

### If you have permissions error
```shell
sail root-shell
cd ..
chown -R sail:sail html
exit
```