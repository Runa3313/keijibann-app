# BBS App Directory Structure

bbs-app-php/  
├── public/  
│   ├── index.php                   # スレッド一覧ページのエントリーポイント  
│   ├── thread_create.php           # スレッド作成ページ  
│   ├── thread_view.php             # スレッド詳細表示・レス作成ページ  
│   ├── register.php                # ユーザー登録ページ  
│   ├── response_create.php         # レス作成ページ  
│   ├── login.php                   # ログインページ  
│   └── logout.php                  # ログアウト機能ページ  
│
├── config/  
│   └── db.php                      # データベース接続設定  
│
├── models/  
│   ├── Thread.php                  # スレッドモデル  
│   ├── Response.php                # レスモデル  
│   └── User.php                    # ユーザーモデル  
│
├── controllers/  
│   ├── ThreadController.php        # スレッド関連のコントローラ  
│   ├── ResponseController.php      # レス関連のコントローラ  
│   └── UserController.php          # ユーザー関連のコントローラ  
│
├── views/  
│   ├── threads/  
│   │   ├── index.php               # スレッド一覧のビュー  
│   │   ├── create.php              # スレッド作成のビュー  
│   │   └── view.php                # スレッド詳細・レス一覧のビュー  
│   ├── users/
│   │   ├── register.php            # ユーザー登録のビュー  
│   │   ├── login.php               # ログインのビュー  
│   │   └── logout.php              # ログアウトのビュー  
│   └── responses/  
│       └── create.php              # レス作成のビュー  
│
├── middleware/  
│   └── AuthMiddleware.php          # 認証ミドルウェア  
│
├── assets/  
│   ├── css/  
│   │   └── styles.css              # CSSファイル  
│   └── js/  
│       └── scripts.js              # JavaScriptファイル  
│
├── .gitignore                      # Gitで無視するファイルの設定  
└── README.md                       # プロジェクトの説明 

# BBS App Directory Structure


