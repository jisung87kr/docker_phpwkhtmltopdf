# docker_phpwkhtmltopdf

## 사용안내
1. env.example 파일 .env 으로 변경
2. HTTP_PORT 변수 수정
3. docker-compose up -d --build 실행
4. cd public_html
5. composer install _(로컬에 컴포저가 설치되어 있어야 합니다. 설치되어 있지 않으면 컨테이너 접속해서 실행)_
7. localhost:HTTP_PORT 에 접속해서 PDF 생성 확

> - [wkhtmltopdf 라이브러리](https://wkhtmltopdf.org/)
> - [phpwkhtmltopdf 공식문서](https://github.com/mikehaertl/phpwkhtmltopdf)

