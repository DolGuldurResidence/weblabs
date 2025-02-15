Найдите и исправьте все ошибки в коде (использованы только
изученные элементы). А так же поясните свои исправления. Знать
структуру web-страницы пока не обязательно - задание больше на
внимательность.

```html

<header>Узнай на все 100 %!</header>
    <section>
        <h1>Языки программирования</h1>
        <figure>
            <img src="https://www.python.org/static/img/python-
        logo.png">
            <figcaption>Логотип Python</figcaption>
        </figure>
        <article>
            <p>Изучать Python очень весело</p>
            <p>Но нужно читать и практиковаться</p>
            <p>И сильно-сильно стараться</p>
        </article>
    </section>
    <nav>
        <a href="#">Главная страница</a><br>
        <a href="#">Раздел 1</a><br>
        <a href="#">Раздел 2</a><br>
    </nav>
    <footer>Успехов в освоении</footer>

```

**Ошибки :**
1. Ошибка в использование тега nav как правило блок с навигацией по странице(-ам) размещается в шапке сайта header
2. текст внутри тега header выглядит так будто это title, который должен содержаться внутри тега head
3. отсутствует тег body страницы, где размещен весь контент.  

**Исправленный вариант:**

```html
<head><title>Узнай на все 100 %!</title></head>
	<body>
    	<header>    <nav>
        <a href="#">Главная страница</a><br>
        <a href="#">Раздел 1</a><br>
        <a href="#">Раздел 2</a><br>
    </nav></header>
    <section>
        <h1>Языки программирования</h1>
        <figure>
            <img src="https://www.python.org/static/img/python-logo.png">
            <figcaption>Логотип Python</figcaption>
        </figure>
        <article>
            <p>Изучать Python очень весело</p>
            <p>Но нужно читать и практиковаться</p>
            <p>И сильно-сильно стараться</p>
        </article>    
    </section>
    <footer>Успехов в освоении</footer>
	</body>

```


