FROM node:alpine

WORKDIR /app/frontend

COPY . .



RUN npm install

EXPOSE 5173

CMD ["sh", "-c", "npm run dev -- --host"]
