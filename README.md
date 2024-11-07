

bbs-app-php/  
├── public/  
│    &emsp;├── index.php                  &emsp; # スレッド一覧ページのエントリーポイント  
│    &emsp;├── thread_create.php           &emsp;# スレッド作成ページ  
│    &emsp;├── thread_view.php             &emsp;# スレッド詳細表示・レス作成ページ  
│    &emsp;├── register.php                &emsp;# ユーザー登録ページ  
│    &emsp;├── response_create.php         &emsp;# レス作成ページ  
│    &emsp;├── login.php                   &emsp;# ログインページ  
│    &emsp;└── logout.php                  &emsp;# ログアウト機能ページ  
│  
├── config/  
│   &emsp;└── db.php                      &emsp;# データベース接続設定  
│  
├── models/  
│   &emsp;├── Thread.php                  &emsp;# スレッドモデル  
│   &emsp;├── Response.php                &emsp;# レスモデル  
│   &emsp;└── User.php                    &emsp;# ユーザーモデル  
│  
├── controllers/  
│   &emsp;├── ThreadController.php        &emsp;# スレッド関連のコントローラ  
│   &emsp;├── ResponseController.php      &emsp;# レス関連のコントローラ  
│   &emsp;└── UserController.php          &emsp;# ユーザー関連のコントローラ  
│  
├── views/  
│   &emsp;├── threads/  
│   &emsp;│   &emsp;├── index.php               &emsp;# スレッド一覧のビュー  
│   &emsp;│   &emsp;├── create.php              &emsp;# スレッド作成のビュー  
│   &emsp;│   &emsp;└── view.php                &emsp;# スレッド詳細・レス一覧のビュー  
│   &emsp;├── users/
│   &emsp;│   &emsp;├── register.php            &emsp;# ユーザー登録のビュー  
│   &emsp;│   &emsp;├── login.php               &emsp;# ログインのビュー  
│   &emsp;│   &emsp;└── logout.php              &emsp;# ログアウトのビュー  
│   &emsp;└── responses/  
│       &emsp;└── &emsp;create.php              &emsp;# レス作成のビュー  
│  
├── middleware/  
│   &emsp;└── AuthMiddleware.php          &emsp;# 認証ミドルウェア  
│  
├── assets/  
│   &emsp;├── css/  
│   &emsp;│   &emsp;└── styles.css              &emsp;# CSSファイル  
│   &emsp;└── &emsp;js/  
│       &emsp;&emsp;└── scripts.js              &emsp;# JavaScriptファイル  
│  
├── .gitignore                      # Gitで無視するファイルの設定  
└── README.md                       # プロジェクトの説明 




