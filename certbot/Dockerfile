FROM certbot/certbot


RUN apk add --no-cache bash certbot-nginx nginx
RUN pip install certbot-dns-cloudflare
RUN pip install certbot-nginx

RUN mkdir -p /run/nginx

# vi ~/.secret/certbot/cloudflare.ini 
# certbot --dns-cloudflare -d zuiyue.com -d *.zuiyue.com -i nginx
# certbot renew --dry-run

ENTRYPOINT [""]

CMD tail -f /dev/stdout
