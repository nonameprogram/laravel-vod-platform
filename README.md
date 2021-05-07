# laravel-vod-platform


# Instalacja
1. Pobierz Composer ze strony https://getcomposer.org/ 
2. Zainstaluj framework laravel poprzez Composera.
```
composer global require laravel/installer
```
3. Sprawdź wersje laravela poleceniem ``` laravel --version ```<br>Jeśli wersja jest poniżej 4.0 wpisz polecenie ```composer global require "laravel/installer:^4.0"``` oraz ```composer update```
5. Skopiuj repozytorium używając Github Desktop, aby wprowadzać zmiany i zachować stare wersje projektu. 
6. W miejscu, w którym umieściłeś repozytorium wpisz poniższe polecenie żeby pobrać wszystkie paczki potrzebne do działania projektu
```
composer install
```
7. Uruchom projekt poleceniem ```php artisan serve``` (możesz stworzyć plik .bat w folderze projektu oraz skrót)
8. Wyświetl strone http://localhost:8000
