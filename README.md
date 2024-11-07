

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
│   &emsp;&ensp;│   &emsp;├── index.php               &emsp;# スレッド一覧のビュー  
│   &emsp;&ensp;│   &emsp;├── create.php              &emsp;# スレッド作成のビュー  
│   &emsp;&ensp;│   &emsp;└── view.php                &emsp;# スレッド詳細・レス一覧のビュー  
│   &emsp;├── users/  
│   &emsp;&ensp;│   &emsp;├── register.php            &emsp;# ユーザー登録のビュー  
│   &emsp;&ensp;│   &emsp;├── login.php               &emsp;# ログインのビュー  
│   &emsp;&ensp;│   &emsp;└── logout.php              &emsp;# ログアウトのビュー  
│   &emsp;&thinsp;└── responses/  
│       &emsp;&emsp;&emsp;&emsp;&emsp;└── create.php              &emsp;# レス作成のビュー  
│  
├── middleware/  
│   &emsp;└── AuthMiddleware.php          &emsp;# 認証ミドルウェア  
│  
├── assets/  
│   &emsp;├── css/  
│   &emsp;&ensp;│   &emsp;&emsp;└── styles.css              &emsp;# CSSファイル  
│   &emsp;&thinsp;└── &emsp;js/  
│       &emsp;&emsp;&emsp;&emsp;&emsp;└── scripts.js              &emsp;# JavaScriptファイル  
│  
├── .gitignore                      # Gitで無視するファイルの設定  
└── README.md                       # プロジェクトの説明 




