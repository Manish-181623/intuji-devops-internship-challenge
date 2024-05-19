# Author: Manish Ghimire
## 1. Docker Installation using Bash Script

[Link](https://github.com/Manish-181623/Images/blob/master/dockerinstallscript.sh)

![Script](https://github.com/Manish-181623/Testphp/assets/100844849/5579fb43-397d-4184-b4a6-586c463a74b2)

## 2. Cloning GitHub Repository
[Link]((https://github.com/silarhi/php-hello-world.git).) with local repository
```bash
git clone (https://github.com/silarhi/php-hello-world.git)

```
## 3. Create Dockerfile
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/518e10cf-3130-4ec4-b1a9-62ac87c8145d)

Building Dockerfile
```bash
docker build -t php_hello_img .
```
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/d7490ff7-189c-42e5-b04f-2af4b04140bd)
Run dockerfile
```bash
docker run -d -it -p 8000:80 --name phpcontainer phpimg
```
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/7e91a4a9-4879-44e9-81be-9c8b9f8ea5fa)

![Image](https://github.com/Manish-181623/Testphp/assets/100844849/a2728e42-58aa-4c04-b226-0bb8659bd199)

## 4. Push to DockerHub
```bash
docker push manish181623/hello_world_img
```


[Link to dockerhub](https://hub.docker.com/r/manish181623/hello_world_img)

![Image](https://github.com/Manish-181623/Testphp/assets/100844849/74b70d09-6064-4a06-980e-e4ca5d509129)

## 5. Create Docker-Compose
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/8c92bb6c-c96b-404a-92ee-7ae489d913ff)

Run docker-compose file
```bash 
 docker-compose up -d
```
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/1c278911-2b7e-4346-891e-b99123e14af7)

![compose_output](https://github.com/Manish-181623/Testphp/assets/100844849/725954cc-8dd7-4bba-a3dc-6015f273db22)

## 6. Jenkins
#### 6.1 Installed Git Plugin
![Image](https://github.com/Manish-181623/Testphp/assets/100844849/3ac1a989-1b25-49ee-af6d-735c789f32d4)
 #### 6.2 Created freestyle named Hello_World_Project
 ![Image](https://github.com/Manish-181623/Testphp/assets/100844849/aac03f9d-9cfa-432d-96a1-ea8170eb6e36)
 #### 6.3 Configured project to build from Git repository
 ![Image](https://github.com/Manish-181623/Testphp/assets/100844849/5f00a79b-eefe-415c-becb-33930cbc7634)
 #### 6.4 Build Project
 ![Image](https://github.com/Manish-181623/Testphp/assets/100844849/3151f3c5-b386-4d1d-8a36-4aa8e369110a)
 #### 6.5 Console Output 
 ![Image](https://github.com/Manish-181623/Testphp/assets/100844849/563bea0e-62d3-4d26-9059-3596439c9601)