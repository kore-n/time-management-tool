FROM node:18

# 作業ディレクトリを指定
WORKDIR /app

# package.jsonをコピー
COPY package*.json ./

# 依存関係をインストール
RUN npm install --legacy-peer-deps

# ソースコードをコピー
COPY . .

# Viteサーバーを起動
CMD ["npm", "run", "dev"]