# 泛域名证书
1. https://dash.cloudflare.com/profile/api-tokens 申请证书

- [alt token申请](https://blog.ausmis.com/wp-content/uploads/2021/07/WLhMMGVzIz-768x829.png)
- 需要开放所有域名权限

2. vi /etc/letsencrypt/cloudflare.ini

3. dns_cloudflare_api_token = _QgHxQuNL2pB5wlBOsDvbY5P_Q5YzlAKodatp56a-kM0

4. chmod 600 /etc/letsencrypt/cloudflare.ini

5. certbot --dns-cloudflare -d zuiyue.com -d *.zuiyue.com -i nginx

6. input: /etc/letsencrypt/cloudflare.ini

7. certbot renew --dry-run


# 子域名证书

1.add webroot to nginx
server
{
  server_name download.domain.com;
  root /www/domain;
}

2.run docker
docker run -it --rm -v /home/core/data/www/letsencrypt:/etc/letsencrypt -v /home/core/data:/data ivories/certbot 
3.run command
certbot certonly --webroot -w /data/www/domain --email=master@domain.com --verbose --noninteractive --agree-tos -d download.domain.com

4.edit update.sh
edit ~/data/www/domain/update.sh

5.add autorun/2880
docker run -it --rm -v /home/core/data/www/letsencrypt:/etc/letsencrypt -v /home/core/data:/data ivories/certbot /data/www/domain/update.sh

other way use letsencrypt
https://github.com/YJBeetle/letsencrypt-dnspod
https://github.com/lukas2511/dehydrated

