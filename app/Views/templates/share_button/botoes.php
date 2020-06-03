<!-- by https://github.com/BlogCyberini/WebShareButton -->

<style>
    .facebook-share-button { /*facebook*/
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: 5px;
        background-size: 100% 100%; /* ou 'contain' */
        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI3My4wMDAwMDAsIC0xMzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjMzQ2REE2IiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNMTAyLjk5NTkzNywwIEwxNTcuMDA0MDYzLDAgQzE1OC42NTg2NzMsMCAxNjAsMS4zMzczMDk3NCAxNjAsMi45OTU5Mzc0MyBMMTYwLDU3LjAwNDA2MjYgQzE2MCw1OC42NTg2NzMxIDE1OC42NjI2OSw2MCAxNTcuMDA0MDYzLDYwIEwxMDIuOTk1OTM3LDYwIEMxMDEuMzQxMzI3LDYwIDEwMCw1OC42NjI2OTAzIDEwMCw1Ny4wMDQwNjI2IEwxMDAsMi45OTU5Mzc0MyBDMTAwLDEuMzQxMzI2ODggMTAxLjMzNzMxLDAgMTAyLjk5NTkzNywwIFoiIGlkPSJzcXVhcmUtMiIvPjwvZz48ZyBmaWxsPSIjRkZGRkZGIiBpZD0iaWNvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTgyLjAwMDAwMCwgMTUwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0xMTYuNDYyMjI0LDM1LjMxNDMxMyBMMTE2LjQ2MjIyNCwxNy45OTg5NjEzIEwxMTIuOTQzMjg5LDE3Ljk5ODk2MTIgTDExMi45NDMyODksMTIuMjU5MzU2MyBMMTE2LjQ2MjIyNCwxMi4yNTkzNTYzIEwxMTYuNDYyMjI0LDguNzg4Mzg2NDEgQzExNi40NjIyMjQsNC4xMDY2NDIyMiAxMTcuODYxOTk1LDAuNzMwNjE4OTg2IDEyMi45ODgxMDIsMC43MzA2MTg5ODYgTDEyOS4wODYzNiwwLjczMDYxODk4NiBMMTI5LjA4NjM2LDYuNDU4NDM5OTYgTDEyNC43OTIyNTUsNi40NTg0Mzk5NiBDMTIyLjY0MTg5NCw2LjQ1ODQzOTk2IDEyMi4xNTE4NzQsNy44ODczNzYzIDEyMi4xNTE4NzQsOS4zODM3NjA5NSBMMTIyLjE1MTg3NCwxMi4yNTkzNTUzIEwxMjguNzY5NDIzLDEyLjI1OTM1NTggTDEyNy44NjYxNzMsMTcuOTk4OTYxMyBMMTIyLjE1MTg3NCwxNy45OTg5NjEzIEwxMjIuMTUxODc0LDM1LjMxNDMxMjMgTDExNi40NjIyMjQsMzUuMzE0MzEzIFoiIGlkPSJmYWNlYm9vayIvPjwvZz48L2c+PC9nPjwvc3ZnPg=="); /*Base 64 Icon by Xinh Studio*/
        background-repeat: no-repeat;
        background-position: center;
    }

    .whatsapp-share-button { /*whatsapp*/
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: 5px;
        background-size: 100% 100%; /* ou 'contain' */
        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk3My4wMDAwMDAsIC01MzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjNTdCQTYzIiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNODAyLjk5NTkzNyw0MDAgTDg1Ny4wMDQwNjMsNDAwIEM4NTguNjU4NjczLDQwMCA4NjAsNDAxLjMzNzMxIDg2MCw0MDIuOTk1OTM3IEw4NjAsNDU3LjAwNDA2MyBDODYwLDQ1OC42NTg2NzMgODU4LjY2MjY5LDQ2MCA4NTcuMDA0MDYzLDQ2MCBMODAyLjk5NTkzNyw0NjAgQzgwMS4zNDEzMjcsNDYwIDgwMCw0NTguNjYyNjkgODAwLDQ1Ny4wMDQwNjMgTDgwMCw0MDIuOTk1OTM3IEM4MDAsNDAxLjM0MTMyNyA4MDEuMzM3MzEsNDAwIDgwMi45OTU5MzcsNDAwIFoiIGlkPSJzcXVhcmUtNDkiLz48L2c+PGcgZmlsbD0iI0ZGRkZGRiIgaWQ9Imljb24iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4Mi4wMDAwMDAsIDE1MC4wMDAwMDApIj48cGF0aCBkPSJNODIxLjA3MTI2Miw0MzQuMjIxMDQ2IEM4MTguMjEwODMxLDQzNC4yMjEwNDYgODE1LjUyMzU2OSw0MzMuNDg5OTY5IDgxMy4xODU2LDQzMi4yMDY4OTIgTDgwNC4xNTM4NDYsNDM1LjA3NjkyMyBMODA3LjA5ODA5Miw0MjYuMzkxODc3IEM4MDUuNjEzMDQ2LDQyMy45NTIzNjkgODA0Ljc1NzUzOCw0MjEuMDkxNTY5IDgwNC43NTc1MzgsNDE4LjAzMzYgQzgwNC43NTc1MzgsNDA5LjA5MzQxNSA4MTIuMDYxMjkyLDQwMS44NDYxNTQgODIxLjA3MTYzMSw0MDEuODQ2MTU0IEM4MzAuMDgwODYyLDQwMS44NDYxNTQgODM3LjM4NDYxNSw0MDkuMDkzNDE1IDgzNy4zODQ2MTUsNDE4LjAzMzYgQzgzNy4zODQ2MTUsNDI2Ljk3Mzc4NSA4MzAuMDgxMjMxLDQzNC4yMjEwNDYgODIxLjA3MTI2Miw0MzQuMjIxMDQ2IFogTTgyMS4wNzEyNjIsNDA0LjQyNDEyMyBDODEzLjUwNzkzOCw0MDQuNDI0MTIzIDgwNy4zNTU4MTUsNDEwLjUyOTM1NCA4MDcuMzU1ODE1LDQxOC4wMzM2IEM4MDcuMzU1ODE1LDQyMS4wMTE0NDYgODA4LjMyNjUyMyw0MjMuNzY5MjMxIDgwOS45NjgxMjMsNDI2LjAxMzA0NiBMODA4LjI1NDg5Miw0MzEuMDY3MDc3IEw4MTMuNTI1MjkyLDQyOS4zOTE4NzcgQzgxNS42OTEyLDQzMC44MTM3ODUgODE4LjI4NTQxNSw0MzEuNjQzMDc3IDgyMS4wNzEyNjIsNDMxLjY0MzA3NyBDODI4LjYzMzQ3Nyw0MzEuNjQzMDc3IDgzNC43ODY3MDgsNDI1LjUzODIxNSA4MzQuNzg2NzA4LDQxOC4wMzM5NjkgQzgzNC43ODY3MDgsNDEwLjUyOTcyMyA4MjguNjMzNDc3LDQwNC40MjQxMjMgODIxLjA3MTI2Miw0MDQuNDI0MTIzIEw4MjEuMDcxMjYyLDQwNC40MjQxMjMgWiBNODI5LjMwODgsNDIxLjc2MTcyMyBDODI5LjIwODM2OSw0MjEuNTk2Njc3IDgyOC45NDE3ODUsNDIxLjQ5Njk4NSA4MjguNTQyNjQ2LDQyMS4yOTg3MDggQzgyOC4xNDI0LDQyMS4xMDA0MzEgODI2LjE3NTg3Nyw0MjAuMTQwMDYyIDgyNS44MDk5NjksNDIwLjAwODI0NiBDODI1LjQ0Mjk1NCw0MTkuODc2MDYyIDgyNS4xNzYsNDE5LjgwOTIzMSA4MjQuOTA5Nzg1LDQyMC4yMDY1MjMgQzgyNC42NDM1NjksNDIwLjYwMzgxNSA4MjMuODc3MDQ2LDQyMS40OTY5ODUgODIzLjY0MzMyMyw0MjEuNzYxNzIzIEM4MjMuNDA5OTY5LDQyMi4wMjY4MzEgODIzLjE3Njk4NSw0MjIuMDYwMDYyIDgyMi43NzcxMDgsNDIxLjg2MTQxNSBDODIyLjM3NzYsNDIxLjY2MzEzOCA4MjEuMDg4OTg1LDQyMS4yNDQwNjIgODE5LjU2MTEwOCw0MTkuODkyMzA4IEM4MTguMzcyNTU0LDQxOC44NDA3MzggODE3LjU2OTg0Niw0MTcuNTQyNTIzIDgxNy4zMzY4NjIsNDE3LjE0NDg2MiBDODE3LjEwMzUwOCw0MTYuNzQ3OTM4IDgxNy4zMTIxMjMsNDE2LjUzMzQxNSA4MTcuNTEyMjQ2LDQxNi4zMzU4NzcgQzgxNy42OTIwNjIsNDE2LjE1NzkwOCA4MTcuOTEyMTIzLDQxNS44NzI0OTIgODE4LjExMjI0Niw0MTUuNjQwOTg1IEM4MTguMzEyMzY5LDQxNS40MDkxMDggODE4LjM3ODgzMSw0MTUuMjQ0MDYyIDgxOC41MTE3NTQsNDE0Ljk3ODk1NCBDODE4LjY0NTQxNSw0MTQuNzE0MjE1IDgxOC41Nzg1ODUsNDE0LjQ4MjcwOCA4MTguNDc4NTIzLDQxNC4yODM2OTIgQzgxOC4zNzg0NjIsNDE0LjA4NTQxNSA4MTcuNTc4MzM4LDQxMi4xMzI5MjMgODE3LjI0NTI5Miw0MTEuMzM4MzM4IEM4MTYuOTEyMjQ2LDQxMC41NDQ0OTIgODE2LjU3OTU2OSw0MTAuNjc2Njc3IDgxNi4zNDU4NDYsNDEwLjY3NjY3NyBDODE2LjExMjQ5Miw0MTAuNjc2Njc3IDgxNS44NDU5MDgsNDEwLjY0MzQ0NiA4MTUuNTc5MzIzLDQxMC42NDM0NDYgQzgxNS4zMTI3MzgsNDEwLjY0MzQ0NiA4MTQuODc5MjYyLDQxMC43NDI3NjkgODE0LjUxMjYxNSw0MTEuMTM5NjkyIEM4MTQuMTQ2MzM4LDQxMS41MzY5ODUgODEzLjExMzYsNDEyLjQ5Njk4NSA4MTMuMTEzNiw0MTQuNDQ5MTA4IEM4MTMuMTEzNiw0MTYuNDAxNiA4MTQuNTQ1ODQ2LDQxOC4yODggODE0Ljc0NjMzOCw0MTguNTUyMzY5IEM4MTQuOTQ2MDkyLDQxOC44MTY3MzggODE3LjUxMTg3Nyw0MjIuOTUzNiA4MjEuNTc2NzM4LDQyNC41NDI0IEM4MjUuNjQzMDc3LDQyNi4xMzA4MzEgODI1LjY0MzA3Nyw0MjUuNjAwOTg1IDgyNi4zNzYzNjksNDI1LjUzNDg5MiBDODI3LjEwODU1NCw0MjUuNDY4OCA4MjguNzQxMjkyLDQyNC41NzUyNjIgODI5LjA3NTQ0Niw0MjMuNjQ4ODYyIEM4MjkuNDA4MTIzLDQyMi43MjE3MjMgODI5LjQwODEyMyw0MjEuOTI3MTM4IDgyOS4zMDg4LDQyMS43NjE3MjMgTDgyOS4zMDg4LDQyMS43NjE3MjMgWiIgaWQ9IndoYXRzYXBwIi8+PC9nPjwvZz48L2c+PC9zdmc+"); /*Base 64 Icon by Xinh Studio*/
        background-repeat: no-repeat;
        background-position: center;
    }

    .twitter-share-button { /*twitter*/
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: 5px;
        background-size: 100% 100%; /* ou 'contain' */
        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3My4wMDAwMDAsIC0xMzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjNDE4NkNEIiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNMi45OTU5Mzc0MywwIEw1Ny4wMDQwNjI2LDAgQzU4LjY1ODY3MzEsMCA2MCwxLjMzNzMwOTc0IDYwLDIuOTk1OTM3NDMgTDYwLDU3LjAwNDA2MjYgQzYwLDU4LjY1ODY3MzEgNTguNjYyNjkwMyw2MCA1Ny4wMDQwNjI2LDYwIEwyLjk5NTkzNzQzLDYwIEMxLjM0MTMyNjg4LDYwIDAsNTguNjYyNjkwMyAwLDU3LjAwNDA2MjYgTDAsMi45OTU5Mzc0MyBDMCwxLjM0MTMyNjg4IDEuMzM3MzA5NzQsMCAyLjk5NTkzNzQzLDAgWiIgaWQ9InNxdWFyZSIvPjwvZz48ZyBmaWxsPSIjRkZGRkZGIiBpZD0iaWNvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTgyLjAwMDAwMCwgMTUwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0zMi4wNTIxMzg1LDYuNDM2Njk0MjcgQzMwLjg0MzE4NDYsNS4wNjIyMDE1IDI5LjEyMDUzODUsNC4xODY0NjQxIDI3LjIxNDA2MTUsNC4xNTQ3MzEwMyBDMjMuNTUzNiw0LjA5MzgwMzA5IDIwLjU4NTY1MzgsNy4xODY5MjMzOSAyMC41ODU2NTM4LDExLjA2MzExNiBDMjAuNTg1NjUzOCwxMS42MTMyNDEyIDIwLjY0NDI5MjMsMTIuMTQ5NjkzNCAyMC43NTczNjkyLDEyLjY2NDY3MzIgQzE1LjI0ODU4NDYsMTIuMzA3MzUyNiAxMC4zNjQ0NjkyLDkuNDM4NzcwNTkgNy4wOTU0MTUzOCw1LjExNDcyMTggQzYuNTI0ODYxNTQsNi4xNTA4NjE3IDYuMTk3OTA3NjksNy4zNjE4ODI3MSA2LjE5NzkwNzY5LDguNjU5MTUwMzcgQzYuMTk3OTA3NjksMTEuMTE0OTg4NCA3LjM2ODA5MjMxLDEzLjI5NDUyNzIgOS4xNDY2MzA3NywxNC41ODE0MTc0IEM4LjA2MDEyMzA4LDE0LjUzMzQ0OTkgNy4wMzgwNjkyMywxNC4yMDQ1Mzc4IDYuMTQ0NDM4NDYsMTMuNjY0OTUyIEM2LjE0Mzc5MjMxLDEzLjY5NDQ0NSA2LjE0Mzc5MjMxLDEzLjcyMzk0NDkgNi4xNDM3OTIzMSwxMy43NTM5NjI1IEM2LjE0Mzc5MjMxLDE3LjE4MzU0OTcgOC40Mjg1OTIzMSwyMC4wNjA3MDc2IDExLjQ2MDgzMDgsMjAuNzMwOTM4MyBDMTAuOTA0NjUzOCwyMC44ODg1MzggMTAuMzE5MDc2OSwyMC45NzEwMTYzIDkuNzE0NiwyMC45NjcwMDggQzkuMjg3NDkyMzEsMjAuOTY0MTc1OCA4Ljg3MjE3NjkyLDIwLjkxNjgxMTggOC40Njc1MjMwOCwyMC44MzE3NjggQzkuMzEwOTE1MzgsMjMuNjQ0Mzc3NyAxMS43NTg3MDc3LDI1LjY5Njc2NjMgMTQuNjU5MjkyMywyNS43NjQ2MjggQzEyLjM5MDgwNzcsMjcuNjQ3Njk2MyA5LjUzMjg2OTIzLDI4Ljc2OTE5MzMgNi40MjcyOTIzMSwyOC43NjI3ODcgQzUuODkyMjc2OTIsMjguNzYxNjgzMyA1LjM2NDY5MjMxLDI4LjcyNzExMiA0Ljg0NjE1Mzg1LDI4LjY2MDU5OTYgQzcuNzc5NTMwNzcsMzAuNjczMzEzOSAxMS4yNjM1OTIzLDMxLjg0NTE3MTEgMTUuMDA2NzYxNSwzMS44NDYxNTMxIEMyNy4xOTg1NTM4LDMxLjg0OTM1MTggMzMuODY1NzMwOCwyMS4yMzk1MTA5IDMzLjg2NTczMDgsMTIuMDM2NzY4NyBDMzMuODY1NzMwOCwxMS43MzQ4MzYzIDMzLjg1OTEwNzcsMTEuNDM0NTE5MSAzMy44NDY1MDc3LDExLjEzNTY1MiBDMzUuMTQxNTYxNSwxMC4xNzA2NjY1IDM2LjI2NTIyMzEsOC45NjA3ODkxNSAzNy4xNTM4NDYyLDcuNTc5MjE5MDEgQzM1Ljk2NTI0NjIsOC4xMTUwMTYxNSAzNC42ODc2Mzg1LDguNDcwODY4NjMgMzMuMzQ3MDMwOCw4LjYyMDEzNzg5IEMzNC43MTU0MjMxLDcuNzc3OTY1MTggMzUuNzY2NTUzOCw2LjQzMDA5NjA3IDM2LjI2MTM0NjIsNC44MTM3NTg0IEMzNC45ODA1MDc3LDUuNTkwNDkyMjkgMzMuNTYyMDM4NSw2LjE0NzUxMjg2IDMyLjA1MjEzODUsNi40MzY2OTQyNyBaIiBpZD0idHdpdHRlciIvPjwvZz48L2c+PC9nPjwvc3ZnPg=="); /*Base 64 Icon by Xinh Studio*/
        background-repeat: no-repeat;
        background-position: center;
    }

    .mail-share-button { /*email*/
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: 5px;
        background-size: 100% 100%; /* ou 'contain' */
        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA%2FPjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8%2BPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI%2BPGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTg3My4wMDAwMDAsIC02MzguMDAwMDAwKSI%2BPGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjMzQ5OERCIiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNNzAyLjk5NTkzNyw1MDAgTDc1Ny4wMDQwNjMsNTAwIEM3NTguNjU4NjczLDUwMCA3NjAsNTAxLjMzNzMxIDc2MCw1MDIuOTk1OTM3IEw3NjAsNTU3LjAwNDA2MyBDNzYwLDU1OC42NTg2NzMgNzU4LjY2MjY5LDU2MCA3NTcuMDA0MDYzLDU2MCBMNzAyLjk5NTkzNyw1NjAgQzcwMS4zNDEzMjcsNTYwIDcwMCw1NTguNjYyNjkgNzAwLDU1Ny4wMDQwNjMgTDcwMCw1MDIuOTk1OTM3IEM3MDAsNTAxLjM0MTMyNyA3MDEuMzM3MzEsNTAwIDcwMi45OTU5MzcsNTAwIFoiIGlkPSJzcXVhcmUtNTgiLz48L2c%2BPGcgZmlsbD0iI0ZGRkZGRiIgaWQ9Imljb24iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4Mi4wMDAwMDAsIDE1MC4wMDAwMDApIj48cGF0aCBkPSJNNzIxLDUyMS40NjE1MzggTDczOC4zMDc2OTIsNTA2LjQ2MTUzOCBMNzAzLjY5MjMwOCw1MDYuNDYxNTM4IEw3MjEsNTIxLjQ2MTUzOCBaIE03MTYuMzI1MTc3LDUxOS44MDEwNTQgTDcyMSw1MjMuNjM4MjQgTDcyNS42MDE1ODEsNTE5LjgwMTA1NCBMNzM4LjMwNzY5Miw1MzAuNjkyMzA4IEw3MDMuNjkyMzA4LDUzMC42OTIzMDggTDcxNi4zMjUxNzcsNTE5LjgwMTA1NCBaIE03MDIuNTM4NDYyLDUyOS41Mzg0NjIgTDcwMi41Mzg0NjIsNTA3LjYxNTM4NSBMNzE1LjIzMDc2OSw1MTguNTc2OTIzIEw3MDIuNTM4NDYyLDUyOS41Mzg0NjIgWiBNNzM5LjQ2MTUzOCw1MjkuNTM4NDYyIEw3MzkuNDYxNTM4LDUwNy42MTUzODUgTDcyNi43NjkyMzEsNTE4LjU3NjkyMyBMNzM5LjQ2MTUzOCw1MjkuNTM4NDYyIFoiIGlkPSJtYWlsIi8%2BPC9nPjwvZz48L2c%2BPC9zdmc%2B"); /*Base 64 Icon by Xinh Studio*/
        background-repeat: no-repeat;
        background-position: center;
    }

    .botoes a {
        width: 30px;
    }
</style>

<div class="botoes">
    <a href="" id="facebook-share-btt" rel="nofollow" target="_blank" class="facebook-share-button"></a>
    <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank" class="whatsapp-share-button"></a>
    <a href="" id="twitter-share-btt" rel="nofollow" target="_blank" class="twitter-share-button"></a>
    <a href="" id="mail-share-btt" rel="nofollow" target="_blank" class="mail-share-button"></a>

    <!-- Your like button code -->
    <div class="fb-like float-right"
         data-href="<?php current_url() ?>"
         data-layout="button_count"
         data-action="like">
    </div>
</div>

<div>
    <!--<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0"></script>
-->

</div>


<script type="text/javascript">

    /*Facebook*/
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
    }, false);

    /*Whatsapp*/
    document.addEventListener("DOMContentLoaded", function () {
        var conteudo = encodeURIComponent(document.title + " " + window.location.href);
        //altera a URL do botão
        document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
    }, false);

    /*twitter*/
    document.addEventListener("DOMContentLoaded", function () {
        var url = encodeURIComponent(window.location.href);
        var titulo = encodeURIComponent(document.title);
        //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
        //altera a URL do botão
        document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url=" + url + "&text=" + titulo;

        //se for usar o atributo via, utilize a seguinte url
        //document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
    }, false);

    /*email*/
    document.addEventListener("DOMContentLoaded", function () {
        var url = window.location.href; //url
        var title = encodeURIComponent(document.title); //título
        var mailToLink = "mailto:?subject=" + title;

        //tenta obter o conteúdo da meta tag description
        var desc = document.querySelector("meta[name='description']");
        desc = (!!desc) ? desc.getAttribute("content") : null;

        //se a meta tag description estiver ausente...
        if (!desc) {
            //...tenta obter o conteúdo da meta tag og:description
            desc = document.querySelector("meta[property='og:description']");
            desc = (!!desc) ? desc.getAttribute("content") : null;
        }
        //Se houver descrição, combina a descrição com a url
        //senão o corpo da mensagem terá apenas a url
        var body = (!!desc) ? desc + " " + url : url;
        //altera o link do botão
        mailToLink = mailToLink + "&body=" + encodeURIComponent(body);
        document.getElementById("mail-share-btt").href = mailToLink;
    }, false);
</script>