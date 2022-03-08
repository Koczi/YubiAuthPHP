Głównym plikiem, na którym trzeba rozpocząć pracę jest index.php.
W projekcie nie używam żadnego cURL (PHP nie ma go wgranego bezpośrednio), 
czy innych funkcji pochodzących z zewnętrznych bibliotek. 
Wystarczy uruchomić projekt na serwerze i mieć dostęp do internetu, by wykorzystać API Yubico.

Statusy (w formie alertów) dodałem, żeby podejrzeć co się dzieje, w normalnych warunkach by ich nie było,
a wszystko sprawdzałbym "po cichu" na jednym poziomie, żeby nie ułatwiać odgadywania, 
najpierw loginu, później hasła, a na koniec klucza.

Domyślnie dodane mam dwa konta:
login: adm, hasło: 123, key: cccccclrnuhn
login: test, hasło: 1234, key cccccclrnuhn (ten sam)

key =/= OTP, bo key to pierwsze powtarzalne 12 znaków klucz, który od Pana dostałem,
który jest jednocześnie jego identyfikatorem.

Kilka niewykorzystanych OTP do odpytania:
cccccclrnuhnkvfjcnviuggncrdikfgbvuknjbtubjlv
cccccclrnuhnkkrgultrcgtejheflggndiehlcuethil
cccccclrnuhnlbnbkhukfudgklbekfvldretbrdvdedi
cccccclrnuhnifcdnjrgnrfdtnuinvifcvhgndnlnbft
cccccclrnuhnertnirdnhrdbjithlthkthevfecukvel
cccccclrnuhndgkedtfctjfubuigtkiehuklddhutjie
cccccclrnuhnigiidugnrkrhuurttbttlrgvlfiglntn
cccccclrnuhnghtnkncfdiijvcthgkdkkddhuljrejed
cccccclrnuhnclurkrdnbrcebfhngegfbvrjefijdbgu
cccccclrnuhnribguchvnjvgkiiguiltcdgcrhdvludf
cccccclrnuhnntiittdbcecbkhhkjbinedvklnkkhldi
cccccclrnuhnjvbkdbldekhdvbrhfkgfddklrghvdfdf
cccccclrnuhnnrkntnedinjhndvhiclirrngirhlbcgc
cccccclrnuhnfkchfjkhfccudelcrervhikrunjrccic