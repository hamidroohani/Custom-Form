# Custom Form

## Installation:

## Clone the project
```bash
git clone https://github.com/hamidroohani/Custom-Form.git
```

```bash
cd Custom-Form/
```

### Run docker to make services
```bash
sudo docker compose up -d
```


### Copy the env file
```bash
cp .env.example .env
```

### Install composer inside docker container
```bash
sudo docker compose exec phpfpm composer install
```

### Open a Browser
```bash
go to http://127.0.0.1:8902
```
