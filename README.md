## TODO

- DB ユーザーを適切に設定する
- コンテナごとに適切なユーザーを作成する

```bash
composer create-project "laravel/laravel=10.*" laravel-livewire

cd laravel-livewire/
composer require livewire/livewire

# ブラウザ上にHello Livewireが表示できることが確認できたら、Livewireのコンポーネントを作成します。
# Livewireを利用してカウンターを作成するので名前をcounterとします。
# Livewireの作成はphp artisan make:livewireコマンドで行います。
php artisan make:livewire counter
```
