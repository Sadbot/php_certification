<!doctype html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body class="c27">

<div><a href="block0/block0_arrays.php">Сравнение массивов</a></div>
<div><a href="block0/block0_float.php">FLOAT вычисления</a></div>
<div><a href="block0/block0_setexception.php">Set exception handler</a></div>
<div><a href="block0/block0_array_func.php">Передача массива после php5 всегда по ссылке</a></div>
<div><a href="block0/block0_const.php">Передача констант в функции</a></div>


<h1 class="c25 c3">
    <a id="h.kwc48yyzczi"></a>
      <span class="c39">
        <a class="c21"
           href="https://www.google.com/url?q=http://kb.simbirsoft/web-%25d0%25bf%25d1%2580%25d0%25be%25d0%25b3%25d1%2580%25d0%25b0%25d0%25bc%25d0%25bc%25d0%25b0-%25d0%25be%25d0%25b1%25d1%2583%25d1%2587%25d0%25b5%25d0%25bd%25d0%25b8%25d1%258f-php-%25d1%2581%25d0%25b5%25d1%2580%25d1%2582%25d0%25b8%25d1%2584%25d0%25b8%25d0%25ba%25d0%25b0%25d1%2586%25d0%25b8%25d1%258f-1-php-basics/&sa=D&ust=1455948886869000&usg=AFQjCNEbe-EhLmlvPhHlgPjy_4atVhMzUw">Web:
            Программа обучения: PHP сертификация: 1 PHP Basics</a>
      </span>
</h1>
<h1 class="c12 c3">
    <a id="h.pjgsowylwkha"></a>
    <span class="c40">PHP Basics</span>
</h1>
<h3 class="c7 c3">
    <a id="h.u0n4v8qzgv4d"></a>
    <span class="c10">Syntax</span>
</h3>
<ul class="c9 lst-kix_1ji40ar0d82u-0 start">
    <li class="c2">
        <span class="c0">Обзор синтаксиса языка</span>
    </li>
    <li class="c2">
        <span class="c0">php tags (&#x3C;?php &#x3C;? &#x3C;?= &#x3C;script &#x3C;%)</span>
    </li>
    <li class="c2">
        <span class="c0">Comments // # /* */</span>
    </li>
    <li class="c2">
        <span class="c0">Variables, constants</span>
    </li>
    <li class="c2">
        <span class="c0">Functions, arguments</span>
    </li>
    <li class="c2">
        <span class="c0">Classes, methods</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.8qpjyw5pjo1g"></a>
    <span class="c10">Operators</span>
</h3>
<ul class="c9 lst-kix_w7y6h1ca3r2c-0 start">
    <li class="c2">
        <span class="c0">Дать описание операций и привести примеры</span>
    </li>
    <li class="c2">
        <span class="c0">Bitwise operators (& | ^ ~ >> << )</span>
    </li>
    <li class="c2">
        <span class="c0">Comparison operators (== === != < > <= >=)</span>
    </li>
    <li class="c2">
        <span class="c0">Comparisons (num, strings, null, bool, objects, array)</span>
    </li>
    <li class="c2">
        <span class="c0">Ternary operator</span>
    </li>
    <li class="c2">
        <span class="c0">Error Control Operator (@ track_errors)</span>
    </li>
    <li class="c2">
        <span class="c0">Incrementing/Decrementing operators, приоритеты выполнения</span>
    </li>
    <li class="c2">
        <span class="c0">String Operators (. .=)</span>
    </li>
    <li class="c2">
        <span class="c0">Array operators (+ == === != < > !==)</span>
    </li>
    <li class="c2">
        <span class="c0">Type operators (instanceof, is_a)</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.pdgi5cmur99k"></a>
    <span class="c10">Types and Variables</span>
</h3>
<ul class="c9 lst-kix_gmepy6zghx8d-0 start">
    <li class="c2">
        <span class="c0">Naming rules</span>
    </li>
    <li class="c2">
        <span class="c0">Types, перечислить все типы</span>
    </li>
    <li class="c2">
        <span class="c0">Проверка типа переменной</span>
    </li>
    <li class="c2">
        <span class="c0">Приведение типа, сравнение переменных разного типа</span>
    </li>
    <li class="c2">
        <span class="c0">unset</span>
    </li>
    <li class="c2">
        <span class="c0">Complex syntax ${name}</span>
    </li>
    <li class="c2">
        <span class="c0">String to number conversion</span>
    </li>
    <li class="c2">
        <span class="c0">Strings and multi-byte characters set</span>
    </li>
    <li class="c2">
        <span class="c0">Heredoc</span>
    </li>
    <li class="c2">
        <span class="c0">Nowdoc</span>
    </li>
    <li class="c2">
        <span class="c0">Integer, hex, octal, max int</span>
    </li>
    <li class="c2">
        <span class="c0">Float, floor((0.1+0.7)*10)</span>
    </li>
    <li class="c2">
        <span class="c0">Boolean, int to bool, str to bool</span>
    </li>
    <li class="c2">
        <span class="c0">Arrays, key casts, enumerated and associative arrays, auto assign keys, unset</span>
    </li>
    <li class="c2">
        <span class="c0">Objects, cast to object</span>
    </li>
    <li class="c2">
        <span class="c0">Resource, get_resource_type()</span>
    </li>
    <li class="c2">
        <span class="c0">Callbacks</span>
    </li>
    <li class="c2">
        <span class="c0">Null</span>
    </li>
    <li class="c2">
        <span class="c0">Variable variables</span>
    </li>
    <li class="c2">
        <span class="c0">Variable function</span>
    </li>
    <li class="c2">
        <span class="c0">Superglobals</span>
    </li>
    <li class="c2">
        <span class="c0">Scope, static variable</span>
    </li>
    <li class="c2">
        <span class="c0">Constants, magic constants</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.mu6s4btavn11"></a>
    <span class="c10">Control Structures and Language Constructs</span>
</h3>
<ul class="c9 lst-kix_x7e33biw61j0-0 start">
    <li class="c2">
        <span class="c0">if, elseif, endif, switch</span>
    </li>
    <li class="c2">
        <span class="c0">for, foreach, while</span>
    </li>
    <li class="c2">
        <span class="c0">break, continue</span>
    </li>
    <li class="c2">
        <span class="c0">return</span>
    </li>
    <li class="c2">
        <span class="c0">require/require_once</span>
    </li>
    <li class="c2">
        <span class="c0">include/include_once</span>
    </li>
    <li class="c2">
        <span class="c0">goto</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.nfzwjed9a83s"></a>
    <span class="c10">Error processing</span>
</h3>
<ul class="c9 lst-kix_ax9e9x9hznkd-0 start">
    <li class="c2">
        <span class="c0">Error reporting, php.ini, error_reporting, display_errors, log_errors, show_source(), highlight_string(), or highlight_file()</span>
    </li>
    <li class="c2">
        <span class="c0">Set error handler</span>
    </li>
    <li class="c2">
        <span class="c0">Exceptions, set_exception_handler, try – catch</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.oiez3lhcc3jr"></a>
    <span class="c10">Namespaces</span>
</h3>
<ul class="c9 lst-kix_3mix9yp83s2c-0 start">
    <li class="c2">
        <span class="c0">Для чего нужно</span>
    </li>
    <li class="c2">
        <span class="c0">На что влияет (на какие элементы языка)</span>
    </li>
    <li class="c2">
        <span class="c0">Вложенные namespaces</span>
    </li>
    <li class="c2">
        <span class="c0">Объявление</span>
    </li>
    <li class="c2">
        <span class="c0">Как резолвятся имена классов и функций</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.imjjrnkjw1t9"></a>
    <span class="c10">References</span>
</h3>
<ul class="c9 lst-kix_ki1hpgo2xxb5-0 start">
    <li class="c2">
        <span class="c0">Assign by reference (передача по ссылке)</span>
    </li>
    <li class="c2">
        <span class="c0">Pass by reference  (наследование по ссылке)</span>
    </li>
    <li class="c2">
        <span class="c0">Return by reference (возвращение по ссылке)</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.13m0qdvmpr40"></a>
    <span class="c10">Extensions</span>
</h3>
<ul class="c9 lst-kix_8f2vrj655d2y-0 start">
    <li class="c2">
        <span class="c0">Extensions</span>
    </li>
    <li class="c2">
        <span class="c0">PEAR</span>
    </li>
    <li class="c2">
        <span class="c0">PECL</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.wat557xf2czs"></a>
    <span class="c10">php.ini</span>
</h3>
<ul class="c9 lst-kix_grtobqlbehhh-0 start">
    <li class="c2">
        <span class="c0">Где расположен, последовательность поиска</span>
    </li>
    <li class="c2">
        <span class="c0">user.ini</span>
    </li>
    <li class="c2">
        <span class="c0">.htaccess</span>
    </li>
    <li class="c2">
        <span class="c0">Режимы переопределения php.ini директив</span>
    </li>
    <li class="c2">
        <span class="c0">Основные директивы</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.7ks5hsej17xk"></a>
    <span class="c10">Garbage collector</span>
</h3>
<ul class="c9 lst-kix_jy4o64ieglh5-0 start">
    <li class="c2">
        <span class="c0">Что это, зачем нужен</span>
    </li>
    <li class="c2">
        <span class="c0">Как работает</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.rbjib76plrvj"></a>
    <span class="c10">Opcode caching</span>
</h3>
<ul class="c9 lst-kix_84iqasyxyem-0 start">
    <li class="c2">
        <span class="c0">Стадии процесса запуска php скрипта</span>
    </li>
    <li class="c2">
        <span class="c0">Зачем нужно opcode кеширование, в чем выигрыш</span>
    </li>
    <li class="c2">
        <span class="c0">Примеры использования</span>
    </li>
</ul>
<p class="c3 c19">
    <span></span>
</p>
<p class="c3 c19">
    <span></span>
</p>
<h1 class="c25 c3 c36">
    <a id="h.u5dkx105vxq"></a>
</h1>
<hr style="page-break-before:always;display:none;">
<h1 class="c25 c3 c36">
    <a id="h.1qsk4onybw00"></a>
</h1>
<h1 class="c25 c3">
    <a id="h.1w4twkosdnt4"></a>
        <span class="c39">
          <a class="c21"
             href="https://www.google.com/url?q=http://kb.simbirsoft/web-%25d0%25bf%25d1%2580%25d0%25be%25d0%25b3%25d1%2580%25d0%25b0%25d0%25bc%25d0%25bc%25d0%25b0-%25d0%25be%25d0%25b1%25d1%2583%25d1%2587%25d0%25b5%25d0%25bd%25d0%25b8%25d1%258f-php-%25d1%2581%25d0%25b5%25d1%2580%25d1%2582%25d0%25b8%25d1%2584%25d0%25b8%25d0%25ba%25d0%25b0%25d1%2586%25d0%25b8%25d1%258f-2-functions/&sa=D&ust=1455948886889000&usg=AFQjCNHlMz26QdyLGQm4hhCeC0rxg8ulBQ">Web:
              Программа обучения: PHP сертификация: 2 Functions</a>
        </span>
</h1>
<h1 class="c3 c12">
    <a id="h.wrrn38rnb5ok"></a>
    <span class="c40">Functions</span>
</h1>
<h3 class="c7 c3">
    <a id="h.x9musgz8cdwo"></a>
    <span class="c10">Basics</span>
</h3>
<ul class="c9 lst-kix_7fbw8bcqftjw-0 start">
    <li class="c2">
        <span class="c0">Объявление, вызов, аргументы</span>
    </li>
    <li class="c2">
        <span class="c0">Значение по-умолчанию для аргументов (передача по ссылке)</span>
    </li>
</ul>
<ul class="c9 lst-kix_7fbw8bcqftjw-0">
    <li class="c2">
        <span class="c0">Вызов через переменную (variable function)</span>
    </li>
    <li class="c2">
        <span class="c0">Объявление функции или класса в функции</span>
    </li>
    <li class="c2">
        <span class="c0">Объявление до вызова</span>
    </li>
    <li class="c2">
        <span class="c0">Переопределение функции, проверка существования функции</span>
    </li>
</ul>
<ul class="c9 lst-kix_7fbw8bcqftjw-0">
    <li class="c2">
        <span class="c0">В каком пространстве имен находятся функции и классы</span>
    </li>
</ul>
<p class="c3 c14 c19">
    <span class="c0"></span>
</p>
<ul class="c9 lst-kix_7fbw8bcqftjw-0">
    <li class="c2">
        <span class="c0">Регистрозависимость названий функций</span>
    </li>
</ul>
<ul class="c9 lst-kix_7fbw8bcqftjw-0">
    <li class="c2">
        <span class="c0">Обращение к глобальным переменным из функции</span>
    </li>
    <li class="c2">
        <span class="c0">Как передаются аргументы в функцию (по значению, по ссылке)</span>
    </li>
    <li class="c2">
        <span class="c0">Рекурсивность</span>
    </li>
    <li class="c2">
        <span class="c0">Получить список переданных в функцию аргументов</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.vpbnz2vpnz6z"></a>
    <span class="c10">Return</span>
</h3>
<ul class="c9 lst-kix_9wak54iohrwd-0 start">
    <li class="c2">
        <span class="c0">Что возвращает функция, если нет return</span>
    </li>
    <li class="c2">
        <span class="c0">Возврат значения по ссылке</span>
    </li>
    <li class="c2">
        <span class="c0">Factory pattern</span>
    </li>
    <li class="c2">
        <span class="c0">Возврат строки по ссылке</span>
    </li>
    <li class="c2">
        <span class="c0">call-time pass-by-reference</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.wxw1u4m1zva6"></a>
    <span class="c10">Variable function</span>
</h3>
<ul class="c9 lst-kix_nkkdqbyhlbqu-0 start">
    <li class="c2">
        <span class="c0">Вызов функции через переменную, передача параметров</span>
    </li>
    <li class="c2">
        <span class="c0">Вызов метода класса через переменную</span>
    </li>
    <li class="c2">
        <span class="c0">Где может пригодится</span>
    </li>
</ul>
<p class="c3 c14">
        <span class="c44">В паттерне фабрика,
        </span>
</p>
<ul class="c9 lst-kix_nkkdqbyhlbqu-0">
    <li class="c2">
        <span class="c0">В каких случаях variable function не будет работать</span>
    </li>
</ul>
<p class="c3">
        <span class="c29">
Переменные функции не будут работать с такими языковыми конструкциями как echo , print , unset() , isset() , empty() , include , require и другими подобными им операторами.</span>
</p>
<h3 class="c7 c3">
    <a id="h.l5a0w0wxbb0v"></a>
    <span class="c10">Anonymous Functions (Lambda Functions) and Closures</span>
</h3>
<ul class="c9 lst-kix_tqhjh93hcjxg-0 start">
    <li class="c2">
        <span class="c0">Что такое анонимная функция</span>
    </li>
    <li class="c2">
        <span class="c0">Пример определения и использования</span>
    </li>
    <li class="c2">
        <span class="c0">Передача параметров в анонимную функцию</span>
    </li>
    <li class="c2">
        <span class="c0">Как проверить, что переменная есть анонимная функция</span>
    </li>
    <li class="c2">
        <span class="c0">create_function(), отличия от анонимной функции</span>
    </li>
    <li class="c2">
        <span class="c0">Замыкание, использование параметров</span>
    </li>
</ul>
<p class="c3 c17">
        <span class="c0">
          <a href="src/reducer.php">
              Задача: Реализовать пример агрегатной функции, которая на основе переданного массива и ряда параметров
              вычисляет значение
          </a>
        </span>
</p>
      <pre>
      <?php echo highlight_file('src/reducer.php', true); ?>
</pre>

<h1 class="c25 c3 c36">
    <a id="h.nwdtit2hfe3b"></a>
</h1>
<hr style="page-break-before:always;display:none;">
<h1 class="c25 c3 c36">
    <a id="h.ptl1fn2mdtn5"></a>
</h1>
<h1 class="c3 c25">
    <a id="h.nldpho91nu8v"></a>
    <span class="c39">Web: Программа обучения: PHP сертификация: 3 Strings and Patterns</span>
</h1>
<h1 class="c12 c3">
    <a id="h.wndmp6kpn77a"></a>
    <span class="c40">Strings and Patterns</span>
</h1>
<h3 class="c7 c3">
    <a id="h.f66odymkhtpo"></a>
    <span class="c10">Basics</span>
</h3>
<ul class="c9 lst-kix_b9yjil71z9cq-0 start">
    <li class="c2">
        <span class="c0">Одинарные и двойные кавычки</span>
    </li>
    <li class="c2">
        <span class="c0">strlen</span>
    </li>
    <li class="c2">
        <span class="c0">str_word_count</span>
    </li>
</ul>
<p class="c15 c3">
    <span class="c0 c42">mixed</span>
    <span class="c4">str_word_count</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$string</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c4">$format</span>
        <span class="c13">
          = 0</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$charlist</span>
        <span class="c1">
          ]] )</span>
</p>
<p class="c3">
    <span>format</span>
</p>
<p class="c3">
    <span>Указывает возвращаемое значение данной функции. На данный момент поддерживаются следующие значения:</span>
</p>
<p class="c3 c33">
    <span>0 - возвращает количество найденных слов</span>
</p>
<p class="c3 c33">
    <span>1 - возвращается массив, содержащий все слова, входящие в строку string</span>
</p>
<p class="c3 c34">
    <span>2 - возвращается массив, индексами которого являются позиции в строке string, а значениями - соответствующие слова.</span>
</p>
<p class="c3 c19">
    <span></span>
</p>
<ul class="c9 lst-kix_b9yjil71z9cq-0">
    <li class="c2">
        <span class="c0">count_chars</span>
    </li>
</ul>
<p class="c15 c3">
    <span class="c0 c42">mixed</span>
    <span class="c1"></span>
    <span class="c4">count_chars</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$string</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$mode</span>
        <span class="c13">
          = 0</span>
        <span class="c1">
          ] )</span>
</p>
<p class="c3">
    <span>В зависимости от параметра mode count_chars() возвращает одно из следующих значений:</span>
</p>
<p class="c3 c34">
    <span>0 - массив, индексами которого являются ASCII-коды, а значениями - число вхождений соответствующего символа.</span>
</p>
<p class="c3 c34">
    <span>1 - то же, что и для 0, но информация о символах с нулевым числом вхождений не включается в массив.</span>
</p>
<p class="c3 c34">
    <span>2 - то же, что и для 0, но в массив включается информация только о символах с нулевым числом вхождений.</span>
</p>
<p class="c3 c34">
    <span>3 - строка, содержащая все уникальные символы в исследуемой строке.</span>
</p>
<p class="c3 c34">
    <span>4 - строка, состоящая из символов, которые не входят в исходную строку.</span>
</p>
<p class="c3 c19">
    <span></span>
</p>
<ul class="c9 lst-kix_b9yjil71z9cq-0">
    <li class="c2">
        <span class="c0">soundex</span>
    </li>
    <li class="c2">
        <span class="c0">metaphone</span>
    </li>
    <li class="c2">
        <span class="c0">trim, ltrim, rtrim</span>
    </li>
</ul>
<h3 class="c3 c7">
    <a id="h.xyd58766lqbd"></a>
    <span class="c10">Comparison</span>
</h3>
<ul class="c9 lst-kix_4yhmxa4a189g-0 start">
    <li class="c2">
        <span class="c0">==</span>
    </li>
    <li class="c2">
        <span class="c0">===</span>
    </li>
    <li class="c2">
        <span class="c0">strcmp</span>
    </li>
    <li class="c2">
        <span class="c0">strcasecmp</span>
    </li>
    <li class="c2">
        <span class="c0">strncasecmp</span>
    </li>
    <li class="c11 c3">
        <span class="c0">similar_text</span>
    </li>
</ul>
<p class="c15 c3">
    <span class="c0">O(N^3)</span>
</p>
<ul class="c9 lst-kix_4yhmxa4a189g-0">
    <li class="c11 c3">
        <span class="c0">levenshtein</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c0">O(N*M)</span>
</p>
<h3 class="c7 c3">
    <a id="h.ecmv1u376n7u"></a>
    <span class="c10">Formatting strings</span>
</h3>
<ul class="c9 lst-kix_uwfor5bm190j-0 start">
    <li class="c3 c11">
        <span class="c0">localeconv</span>
    </li>
</ul>
<p class="c15 c3">
    <span class="c5">array</span>
    <span class="c1"></span>
    <span class="c4">localeconv</span>
        <span class="c1">
          ( void )</span>
</p>
<ul class="c9 lst-kix_uwfor5bm190j-0">
    <li class="c2">
        <span class="c0">nl_langinfo</span>
    </li>
    <li class="c2">
        <span class="c0">setlocale</span>
    </li>
    <li class="c2">
        <span class="c0">number_format</span>
    </li>
    <li class="c2">
        <span class="c0">money_format</span>
    </li>
    <li class="c11 c3">
        <span class="c0">quotemeta</span>
    </li>
</ul>
<p class="c3 c15">
    <span class="c45 c48">. \ + * ? [ ^ ] ( $ )</span>
</p>
<ul class="c9 lst-kix_uwfor5bm190j-0">
    <li class="c2">
        <span class="c0">htmlspecialchars</span>
    </li>
    <li class="c2">
        <span class="c0">htmlspecialchars_decode</span>
    </li>
    <li class="c2">
        <span class="c0">htmlentities</span>
    </li>
    <li class="c2">
        <span class="c0">html_entity_decode</span>
    </li>
    <li class="c2">
        <span class="c0">get_html_translation_table</span>
    </li>
    <li class="c3 c24">
        <span class="c0">strip_tags</span>
    </li>
</ul>
<p class="c3 c38">
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">strip_tags</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$str</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$allowable_tags</span>
        <span class="c1">
          ] )</span>
</p>
<ul class="c9 lst-kix_uwfor5bm190j-0">
    <li class="c2">
        <span class="c0">nl2br</span>
    </li>
    <li class="c2">
        <span class="c0">wordwrap</span>
    </li>
    <li class="c2">
        <span class="c0">ucfirst</span>
    </li>
    <li class="c2">
        <span class="c0">lcfirst</span>
    </li>
    <li class="c2">
        <span class="c0">strtoupper</span>
    </li>
    <li class="c2">
        <span class="c0">strtolower</span>
    </li>
    <li class="c2">
        <span class="c0">ucwords</span>
    </li>
    <li class="c2">
        <span class="c0">bin2hex</span>
    </li>
    <li class="c2">
        <span class="c0">convert_cyr_string</span>
    </li>
</ul>
<p class="c3 c35">
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">convert_cyr_string</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$str</span>
        <span class="c1">
          ,
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$from</span>
        <span class="c1">
          ,
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$to</span>
        <span class="c1">
          )</span>
</p>
<p class="c3 c43">
    <span>from</span>
</p>
<p class="c3">
    <span>Исходная кириллическая кодировка, один символ.</span>
</p>
<p class="c3 c43">
    <span>to</span>
</p>
<p class="c3">
    <span>Целевая кириллическая кодировка, один символ.</span>
</p>
<p class="c3">
    <span>Поддерживаются следующие символы:</span>
</p>
<ul class="c9 lst-kix_e3ll2uybs5ns-0 start">
    <li class="c3 c20">
        <span>k - koi8-r</span>
    </li>
    <li class="c3 c20">
        <span>w - windows-1251</span>
    </li>
    <li class="c3 c20">
        <span>i - iso8859-5</span>
    </li>
    <li class="c3 c20">
        <span>a - x-cp866</span>
    </li>
    <li class="c3 c20">
        <span>d - x-cp866</span>
    </li>
    <li class="c3 c20 c43">
        <span>m - x-mac-cyrillic</span>
    </li>
</ul>
<ul class="c9 lst-kix_uwfor5bm190j-0">
    <li class="c11 c3">
        <span class="c0">hebrev</span>
    </li>
</ul>
<p class="c3">
    <span>Преобразует текст на иврите из логической кодировки в визуальную</span>
</p>
<ul class="c9 lst-kix_uwfor5bm190j-0">
    <li class="c2">
        <span class="c0">hebrevc</span>
    </li>
    <li class="c2">
        <span class="c0">chr</span>
    </li>
    <li class="c2">
        <span class="c0">ord</span>
    </li>
    <li class="c2">
        <span class="c0">convert_uuencode</span>
    </li>
    <li class="c2">
        <span class="c0">convert_uudecode</span>
    </li>
    <li class="c2">
        <span class="c0">base64_encode</span>
    </li>
    <li class="c2">
        <span class="c0">base64_decode</span>
    </li>
    <li class="c2">
        <span class="c0">quoted_printable_encode</span>
    </li>
    <li class="c2">
        <span class="c0">quoted_printable_decode</span>
    </li>
    <li class="c2">
        <span class="c0">printf</span>
    </li>
    <li class="c2">
        <span class="c0">sprintf</span>
    </li>
    <li class="c2">
        <span class="c0">vprintf</span>
    </li>
    <li class="c2">
        <span class="c0">vsprintf</span>
    </li>
    <li class="c2">
        <span class="c0">fprintf</span>
    </li>
    <li class="c2">
        <span class="c0">sscanf</span>
    </li>
    <li class="c2">
        <span class="c0">fscanf</span>
    </li>
    <li class="c11 c3">
        <span class="c0">str_pad</span>
    </li>
</ul>
<p class="c15 c3">
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">str_pad</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$input</span>
        <span class="c1">
          ,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$pad_length</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$pad_string</span>
        <span class="c13">
          = " "</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$pad_type</span>
        <span class="c13">
          = STR_PAD_RIGHT</span>
        <span class="c1">
          ]] )</span>
</p>
<p class="c3">
    <span>input</span>
</p>
<p class="c3">
    <span>Входная строка.</span>
</p>
<p class="c3">
    <span>pad_length</span>
</p>
<p class="c3">
    <span>Если значение pad_length отрицательно, меньше или равно длине входной строки, то дополнения не происходит.</span>
</p>
<p class="c3">
    <span>pad_string</span>
</p>
<p class="c3">
    <span>Замечание:</span>
</p>
<p class="c3">
    <span>pad_string может быть урезана, если необходимое количество дополняемых символов не делится нацело на длину строкиpad_string.</span>
</p>
<p class="c3">
    <span>pad_type</span>
</p>
<p class="c3">
    <span>Необязательный аргумент pad_type может иметь значение STR_PAD_RIGHT, STR_PAD_LEFT или STR_PAD_BOTH. Если не указан, то по умолчанию используется STR_PAD_RIGHT.</span>
</p>
<h3 class="c7 c3">
    <a id="h.et3wbgug1lhb"></a>
    <span class="c10">Useful functions</span>
</h3>
<ul class="c9 lst-kix_m86ewiegmxcx-0 start">
    <li class="c2">
        <span class="c0">substr</span>
    </li>
    <li class="c2">
        <span class="c0">strstr, stristr</span>
    </li>
    <li class="c2">
        <span class="c0">strpos, stripos</span>
    </li>
    <li class="c2">
        <span class="c0">str_replace, str_ireplace</span>
    </li>
    <li class="c2">
        <span class="c0">strtr</span>
    </li>
    <li class="c2">
        <span class="c0">str_getcsv</span>
    </li>
    <li class="c2">
        <span class="c0">addslashes</span>
    </li>
    <li class="c2">
        <span class="c0">stripslashes</span>
    </li>
    <li class="c2">
        <span class="c0">crypt, hash, md5, crc32, sha1</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.kv9xlrtjdi92"></a>
    <span class="c10">mbstring</span>
</h3>
<ul class="c9 lst-kix_vmseoanuq8f-0 start">
    <li class="c2">
        <span class="c0">Зачем нужны многобайтовые строки, в чем проблема</span>
    </li>
    <li class="c2">
        <span class="c0">Зачем нужна расширение mbstring</span>
    </li>
    <li class="c2">
        <span class="c0">Как подключить и активировать</span>
    </li>
    <li class="c2">
        <span class="c0">Перечень настроек (директив)</span>
    </li>
    <li class="c2">
        <span class="c0">В какой кодировке находятся исходные файлы php</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c0">Указывается редактором при создании php-скрипта.</span>
</p>
<ul class="c9 lst-kix_vmseoanuq8f-0">
    <li class="c2">
        <span class="c0">В какой кодировке находятся строки php (во время работы скрипта)</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c0">В кодировке php-скрипта</span>
</p>
<ul class="c9 lst-kix_vmseoanuq8f-0">
    <li class="c2">
        <span class="c0">В какой кодировке в скрипт приходя внешние данных (GET, POST строки)</span>
    </li>
</ul>
<p class="c3">
        <span class="c45">Данные приходят в кодировке,указанной в поле запроса:
        </span>
    <span class="c30">content-type:charset=utf-8</span>
</p>
<p class="c3">
    <span class="c45">Все GET/POST-данные от пользователя передаются в urlencoded-виде и при обратной расшифровке приводятся в определенную кодировку - которая соответствует текущей стандартной кодировке на web-сервере в данном файле или каталоге и настраивается через php.ini. При этом браузер как правило передает специальный HTTP-заголовок с указанием кодировки символов в которой он осуществляет передачу - поэтому вы можете соответствующий HTTP-заголовок Accent-Charset и на основе него выполнить преобразование<br>Но лучше просто исключить ручное составление пользователем GET-запроса и формировать гиперссылки с учетом соответсвующей кодировки - тогда при переходе по такой ссылке данные будут в той же кодировке что и ожидаются PHP-скриптом</span>
</p>
<ul class="c9 lst-kix_vmseoanuq8f-0">
    <li class="c2">
        <span class="c0">В какой кодировке php скрипт отдает тексты</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c0">В кодировке сервера, прописанные в php.ini</span>
</p>
<h3 class="c7 c3">
    <a id="h.x75m6ixten1m"></a>
    <span class="c10">PCRE - Perl Compatible Regular Expressions</span>
</h3>
<ul class="c9 lst-kix_pagb3v50215d-0 start">
    <li class="c2">
        <span class="c0">Можно ли использовать с многобайтовыми строками? +</span>
    </li>
    <li class="c2">
        <span class="c0">Жадность</span>
    </li>
    <li class="c2">
        <span class="c0">preg_match</span>
    </li>
    <li class="c2">
        <span class="c0">preg_match_all</span>
    </li>
    <li class="c2">
        <span class="c0">preg_grep</span>
    </li>
    <li class="c2">
        <span class="c0">preg_filter</span>
    </li>
    <li class="c2">
        <span class="c0">preg_replace</span>
    </li>
    <li class="c2">
        <span class="c0">preg_replace_callback</span>
    </li>
</ul>
<p class="c3 c19">
    <span></span>
</p>
<h1 class="c25 c3 c36">
    <a id="h.21uk58ab4kj0"></a>
</h1>
<hr style="page-break-before:always;display:none;">
<h1 class="c25 c3 c36">
    <a id="h.34tbu86256ik"></a>
</h1>
<h1 class="c25 c3">
    <a id="h.9i9us848hq6r"></a>
    <span class="c39">Web: Программа обучения: PHP сертификация: 4 Arrays</span>
</h1>
<h1 class="c12 c3">
    <a id="h.wzikc7rdnky5"></a>
    <span class="c40">Arrays</span>
</h1>
<h3 class="c7 c3">
    <a id="h.6sbxhss9of3n"></a>
    <span class="c10">Basics</span>
</h3>
<ul class="c9 lst-kix_6z6jo5bdkjyl-0 start">
    <li class="c2">
        <span class="c0">Индексный массив, тип индексов-ключей</span>
    </li>
    <li class="c2">
        <span class="c0">Ассоциативный массив, тип ключей</span>
    </li>
    <li class="c2">
        <span class="c0">Многомерный массив</span>
    </li>
    <li class="c2">
        <span class="c0">Регистрозависимость ключей</span>
    </li>
    <li class="c2">
        <span class="c0">Как распечатать массив</span>
    </li>
    <li class="c2">
        <span class="c0">Как получить php код массива</span>
    </li>
    <li class="c2">
        <span class="c0">Как проверить, что переменная – это массив</span>
    </li>
    <li class="c2">
        <span class="c0">Проверить существование ключа в массиве</span>
    </li>
    <li class="c2">
        <span class="c0">Проверить существование значения в массиве</span>
    </li>
    <li class="c2">
        <span class="c0">Получить ключ по значению</span>
    </li>
    <li class="c2">
        <span class="c0">Получить список всех ключей</span>
    </li>
    <li class="c2">
        <span class="c0">Получить список всех значений</span>
    </li>
    <li class="c2">
        <span class="c0">Подсчитать количество элементов в массиве</span>
    </li>
    <li class="c2">
        <span class="c0">Удалить элемент из массива</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.llt2dgjbgixs"></a>
    <span class="c10">Создание массива</span>
</h3>
<ul class="c9 lst-kix_lgu867pehsbc-0 start">
    <li class="c2">
        <span class="c0">Объявление массива</span>
    </li>
    <li class="c2">
        <span class="c0">Давление элементов в массив</span>
    </li>
    <li class="c2">
        <span class="c0">Замена элемента в массиве</span>
    </li>
    <li class="c2">
        <span class="c0">Создать массив с заданными ключами (array_fill_keys)</span>
    </li>
    <li class="c2">
        <span class="c0">explode/implode</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.4npe7v3ko2lg"></a>
    <span class="c10">Полезные функции</span>
</h3>
<ul class="c9 lst-kix_jw73vel3tgmy-0 start">
    <li class="c2">
        <span class="c0">array_walk</span>
    </li>
    <li class="c2">
        <span class="c0">array_diff</span>
    </li>
    <li class="c11 c3">
        <span class="c0">array_intersec</span>
    </li>
</ul>
<p class="c3 c37">
    <span>$array1 = array("a" => "green", "red", "blue");</span>
</p>
<p class="c3">
    <span>$array2 = array("b" => "green", "yellow", "red");</span>
</p>
<p class="c3">
    <span>$result = array_intersect($array1, $array2);</span>
</p>
<p class="c3">
    <span>print_r($result);</span>
</p>
<p class="c3">
    <span>?></span>
</p>
<p class="c3">
    <span>Результат выполнения данного примера:</span>
</p>
<p class="c3">
        <span>Array<br>(<br>
          [a] => green<br>
          [0] => red<br>)</span>
</p>
<ul class="c9 lst-kix_jw73vel3tgmy-0">
    <li class="c2">
        <span class="c0">array_filter</span>
    </li>
    <li class="c2">
        <span class="c0">array_map</span>
    </li>
    <li class="c3 c41">
          <span class="c0">array_key_exists (vs isset)
          </span>
    </li>
</ul>
<p class="c38 c3">
    <span class="c0">array( key => … value => null )</span>
</p>
<p class="c38 c3">
    <span class="c0">isset (key) = false</span>
</p>
<p class="c3 c47">
    <span class="c0">array_key_exists = true</span>
</p>
<ul class="c9 lst-kix_jw73vel3tgmy-0">
    <li class="c2">
        <span class="c0">array_merge</span>
    </li>
    <li class="c2">
        <span class="c0">array_unique</span>
    </li>
    <li class="c2">
        <span class="c0">in_array vs array_search</span>
    </li>
</ul>
<p class="c3">
        <span class="c4">
          <a class="c21"
             href="https://www.google.com/url?q=http://php.net/manual/ru/language.pseudo-types.php%23language.types.mixed&sa=D&ust=1455948886952000&usg=AFQjCNFt7-2d379VhWI1j8elVQ5MLTFCnQ">mixed</a>
        </span>
    <span class="c1"></span>
    <span class="c4">array_search</span>
        <span class="c1">
          (
        </span>
        <span class="c4">
          <a class="c21"
             href="https://www.google.com/url?q=http://php.net/manual/ru/language.pseudo-types.php%23language.types.mixed&sa=D&ust=1455948886952000&usg=AFQjCNFt7-2d379VhWI1j8elVQ5MLTFCnQ">mixed</a>
        </span>
    <span class="c1"></span>
    <span class="c4">$needle</span>
        <span class="c1">
          ,
        </span>
    <span class="c5">array</span>
    <span class="c1"></span>
    <span class="c4">$haystack</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">bool</span>
    <span class="c1"></span>
    <span class="c4">$strict</span>
        <span class="c13">
          = false</span>
        <span class="c1">
          ] )</span>
</p>
<p class="c3">
        <span class="c0">array_search -
        </span>
    <span>Возвращает ключ для needle, если он был найден в массиве, иначе FALSE.</span>
</p>
<p class="c3 c19">
    <span></span>
</p>
<h3 class="c7 c3">
    <a id="h.i0sktd46zqfr"></a>
    <span class="c10">Sorting</span>
</h3>
<ul class="c9 lst-kix_bkykfbnmn1jl-0 start">
    <li class="c2">
        <span class="c0">sort</span>
    </li>
    <li class="c2">
        <span class="c0">rsort</span>
    </li>
    <li class="c2">
        <span class="c0">ksort</span>
    </li>
    <li class="c2">
          <span class="c0">asort
          </span>
        <span class="c28">Сортирует массив, сохраняя ключи</span>
    </li>
    <li class="c2">
        <span class="c0">usort + callback</span>
    </li>
    <li class="c2">
        <span class="c0">array_rand</span>
    </li>
</ul>
<p class="c3 c17">
    <span class="c0"><a href="src/sort.php">Задача: реализовать разные сортировки массива строк</a></span>
</p>
<pre><?= highlight_file('src/sort.php') ?></pre>
<h3 class="c7 c3">
    <a id="h.k09dgh6zo8gc"></a>
    <span class="c10">Stack & Queue</span>
</h3>
<ul class="c9 lst-kix_8qwsml48exj4-0 start">
    <li class="c2">
        <span class="c0">array_push</span>
    </li>
    <li class="c2">
        <span class="c0">array_pop</span>
    </li>
    <li class="c2">
        <span class="c0">array_unshift</span>
    </li>
    <li class="c2">
        <span class="c0">array_shirt</span>
    </li>
</ul>
<p class="c3 c17">
        <span class="c0">
          <a href="src/stack.php">Задача: реализовать класс очереди и стэка</a>
        </span>
</p>
<?= highlight_file('src/stack.php', true); ?>
<hr style="page-break-before:always;display:none;">
<p class="c3 c19">
    <span></span>
</p>
<h1 class="c25 c3">
    <a id="h.uz9sex6gjjff"></a>
    <span class="c39">Web: Программа обучения: PHP сертификация: 5 I/O</span>
</h1>
<h1 class="c12 c3">
    <a id="h.4rjiuvh3q6pp"></a>
    <span class="c40">I/O</span>
</h1>
<h3 class="c7 c3">
    <a id="h.p1vthhq7kdfq"></a>
    <span class="c10">File resource</span>
</h3>
<ul class="c9 lst-kix_wjag666xmwr5-0 start">
    <li class="c2">
        <span class="c0">fopen, flags</span>
    </li>
    <li class="c2">
        <span class="c0">fread</span>
    </li>
    <li class="c2">
        <span class="c0">ftell</span>
    </li>
    <li class="c2">
        <span class="c0">rewind</span>
    </li>
    <li class="c2">
        <span class="c0">fseek</span>
    </li>
    <li class="c2">
        <span class="c0">feof</span>
    </li>
    <li class="c2">
        <span class="c0">fwrite</span>
    </li>
    <li class="c2">
        <span class="c0">fclose</span>
    </li>
    <li class="c2">
        <span class="c0">fputcsv</span>
    </li>
    <li class="c2">
        <span class="c0">fgetcsv</span>
    </li>
    <li class="c2">
        <span class="c0">fgetc</span>
    </li>
    <li class="c2">
        <span class="c0">fgets</span>
    </li>
    <li class="c2">
        <span class="c0">fgetss</span>
    </li>
    <li class="c11 c3">
        <span class="c0">ftruncate</span>
    </li>
</ul>
<p class="c3 c17">
    <span class="c0"><a href="src/csv.php">Задача: реализовать скрипт чтения и записи CSV файла</a></span>
</p>
      <pre>
        <?= highlight_file('src/csv.php', true); ?>
      </pre>
<h3 class="c7 c3">
    <a id="h.u8khzgbjjhya"></a>
    <span class="c10">Filename</span>
</h3>
<ul class="c9 lst-kix_gszjpbh1tqgw-0 start">
    <li class="c2">
        <span class="c0">file_exists</span>
    </li>
    <li class="c2">
        <span class="c0">is_readable</span>
    </li>
    <li class="c2">
        <span class="c0">is_writable</span>
    </li>
    <li class="c2">
        <span class="c0">is_file</span>
    </li>
    <li class="c2">
        <span class="c0">is_link</span>
    </li>
    <li class="c2">
        <span class="c0">is_dir</span>
    </li>
    <li class="c2">
        <span class="c0">file_get_contents</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">file_get_contents</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$filename</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">bool</span>
    <span class="c1"></span>
    <span class="c4">$use_include_path</span>
        <span class="c13">
          = false</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">resource</span>
    <span class="c1"></span>
    <span class="c4">$context</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$offset</span>
        <span class="c13">
          = -1</span>
        <span class="c1">[,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$maxlen</span>
        <span class="c1">
          ]]]] )</span>
</p>
<ul class="c9 lst-kix_gszjpbh1tqgw-0">
    <li class="c2">
          <span class="c0">readfile
          </span>
        <span class="c28">Читает файл и записывает его в буфер вывода.</span>
    </li>
    <li class="c2">
          <span class="c0">file
          </span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c5">array</span>
    <span class="c1"></span>
    <span class="c4">file</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$filename</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$flags</span>
        <span class="c13">
          = 0</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">resource</span>
    <span class="c1"></span>
    <span class="c4">$context</span>
        <span class="c1">
          ]] )</span>
</p>
<ul class="c9 lst-kix_gszjpbh1tqgw-0">
    <li class="c2">
        <span class="c0">file_put_contents</span>
    </li>
</ul>
<p class="c3 c14 c23">
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">file_put_contents</span>
        <span class="c1">
          (
        </span>
    <span class="c5">string</span>
    <span class="c1"></span>
    <span class="c4">$filename</span>
        <span class="c1">
          ,
        </span>
        <span class="c4">
          <a class="c21"
             href="https://www.google.com/url?q=http://fi2.php.net/manual/ru/language.pseudo-types.php%23language.types.mixed&sa=D&ust=1455948886980000&usg=AFQjCNEYEkahIMuI1xKEFilNe-_DQ5QOvQ">mixed</a>
        </span>
    <span class="c1"></span>
    <span class="c4">$data</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">int</span>
    <span class="c1"></span>
    <span class="c4">$flags</span>
        <span class="c13">
          = 0</span>
        <span class="c1">
          [,
        </span>
    <span class="c5">resource</span>
    <span class="c1"></span>
    <span class="c4">$context</span>
        <span class="c1">
          ]] )</span>
</p>
<ul class="c9 lst-kix_gszjpbh1tqgw-0">
    <li class="c2">
        <span class="c0">tmpfile ( void )</span>
    </li>
</ul>
<p class="c3 c14">
    <span class="c28">Создаёт временный файл с уникальным именем, открывая его в режиме чтения и записи (w+), и возвращает файловый указатель.</span>
</p>
<ul class="c9 lst-kix_gszjpbh1tqgw-0">
    <li class="c2">
          <span class="c0">basename
          </span>
        <span class="c28">Возвращает последний компонент имени из указанного пути</span>
    </li>
</ul>
<p class="c3">
    <span class="c26">string</span>
    <span class="c1"></span>
    <span class="c32">basename</span>
        <span class="c1">
          (
        </span>
    <span class="c26">string</span>
    <span class="c45 c42 c46"></span>
    <span class="c32">$path</span>
        <span class="c1">
          [,
        </span>
    <span class="c26">string</span>
    <span class="c46 c45 c42"></span>
    <span class="c32">$suffix</span>
        <span class="c1">
          ] )</span>
</p>
<ul class="c9 lst-kix_gszjpbh1tqgw-0">
    <li class="c2">
        <span class="c0">dirname</span>
    </li>
    <li class="c2">
        <span class="c0">copy</span>
    </li>
    <li class="c2">
        <span class="c0">unlink</span>
    </li>
    <li class="c2">
        <span class="c0">rename</span>
    </li>
</ul>
<h3 class="c7 c3">
    <a id="h.vrx4g71n4qhg"></a>
    <span class="c10">Locks</span>
</h3>
<ul class="c9 lst-kix_82gsw5bvlzny-0 start">
    <li class="c2">
        <span class="c0">flock</span>
    </li>
    <li class="c2">
        <span class="c0">LOCK_SH</span>
    </li>
    <li class="c2">
        <span class="c0">LOCK_EX</span>
    </li>
    <li class="c2">
        <span class="c0">LOCK_UN</span>
    </li>
</ul>
<p class="c3 c17">
    <span class="c0"><a href="src/locks.php">Задача: реализовать конкурирующие за файл скрипты</a></span>
</p>

<?= highlight_file('src/locks.php', true); ?>

<pre>
        10254: I'm trying to access the file
        10253: I'm trying to access the file
        10254: I'm writing to file
        10255: I'm trying to access the file
        10254: I wrote to file
        10253: I'm writing to file
        10253: I wrote to file
        10255: I'm writing to file
        10255: I wrote to file
        Job 2, “php locks.php & ” has ended
        Job 1, “php locks.php & ” has ended
    </pre>

<h3 class="c7 c3">
    <a id="h.oybg6egubjzc"></a>
    <span class="c10">Streams</span>
</h3>
<ul class="c9 lst-kix_2ofhwattwe98-0 start">
    <li class="c2">
        <span class="c0">Что это такое</span>
    </li>
    <li class="c2">
        <span class="c0">Какие протоколы поддерживаются</span>
    </li>
    <li class="c2">
        <span class="c0">Как работать с потоком</span>
    </li>
    <li class="c2">
        <span class="c0">Контекст</span>
    </li>
    <li class="c2">
        <span class="c0">Фильтры</span>
    </li>
</ul>
<p class="c3 c17">
    <span class="c0"><a href="src/stream.php">Задача: реализовать скрипт работающий с выбранным потоком</a></span>
</p>
<?= highlight_file('src/stream.php', true); ?>
<h1 class="c5 c33">
    <a id="h.nmo3uwe6qsso"></a>
    <span class="c24">Web: Программа обучения: PHP сертификация: 6 Security</span>
</h1>
<h1 class="c36 c5">
    <a id="h.rx86l25l3qmd"></a>
    <span class="c15">Security</span>
</h1>
<h3 class="c17 c5">
    <a id="h.hcktfjon6ltx"></a>
    <span class="c12">General Settings</span>
</h3>
<ul class="c10 lst-kix_2cxs1tsayr9u-0 start">
    <li class="c0">
        <span class="c1">register_globals</span>
    </li>
    <li class="c0">
        <span class="c1">error_reporting</span>
    </li>
    <li class="c0">
        <span class="c1">allow_url_include, allow_url_fopen</span>
    </li>
    <li class="c0">
        <span class="c1">expose_php</span>
    </li>
    <li class="c0">
        <span class="c1">safe_mode</span>
    </li>
    <li class="c0">
        <span class="c1">open_basedir</span>
    </li>
    <li class="c0">
        <span class="c1">disable_functions</span>
    </li>
    <li class="c0">
        <span class="c1">disable_classes</span>
    </li>
</ul>
<h3 class="c17 c5">
    <a id="h.jwljumh9a177"></a>
    <span class="c12">Input filtering and validation</span>
</h3>
<ul class="c10 lst-kix_6d1wrffwymi4-0 start">
    <li class="c0">
        <span class="c1">Validation and filtering</span>
    </li>
    <li class="c0">
        <span class="c1">filter_input</span>
    </li>
    <li class="c0">
        <span class="c1">ctype_alnum</span>
    </li>
    <li class="c0">
        <span class="c1">ctype_*</span>
    </li>
</ul>
<h3 class="c17 c5">
    <a id="h.togj1myu3mat"></a>
    <span class="c12">Escaping</span>
</h3>
<ul class="c10 lst-kix_dvt35mt0hjlg-0 start">
    <li class="c0">
        <span class="c1">Что это и зачем</span>
    </li>
    <li class="c0">
        <span class="c1">Обработка входящих строк</span>
    </li>
    <li class="c0">
        <span class="c1">Запись строк в базу</span>
    </li>
    <li class="c0">
        <span class="c1">Вывод строк в HTML</span>
    </li>
    <li class="c0">
        <span class="c1">Вывод строк в JS</span>
    </li>
    <li class="c0">
        <span class="c1">Вывод строк в XML</span>
    </li>
</ul>
<p class="c5 c27">
    <span class="c1">Задача: реализовать скрипт показывающий как эскейпить строки</span>
</p>
<pre><?= highlight_file('src/escape.php'); ?></pre>
<h3 class="c5 c17">
    <a id="h.x8j85p6tp2yi"></a>
    <span class="c12">Attacks</span>
</h3>
<ul class="c10 lst-kix_pvj96wljlpb8-0 start">
    <li class="c0">
        <span class="c1">Remote Code Injection</span>
    </li>
    <li class="c0">
        <span class="c1">SQL Injection</span>
    </li>
    <li class="c0">
        <span class="c1">XSS</span>
    </li>
    <li class="c0">
        <span class="c1">CSRF</span>
    </li>
    <li class="c0">
        <span class="c1">Session attack</span>
    </li>
</ul>
<p class="c5 c27">
    <span class="c1"><a href="block6/block6_attacks.php?test=1">Задача: реализовать скрипт в котором продемонстрировать
            атаку</a></span>
</p>
<h3 class="c17 c5">
    <a id="h.bpy1bhxf9682"></a>
    <span class="c12">File uploads</span>
</h3>
<ul class="c10 lst-kix_kyywkaqh2drv-0 start">
    <li class="c0">
        <span class="c1">Upload folder permissions, indexes and script exection</span>
    </li>
    <li class="c0">
        <span class="c1">MIME types</span>
    </li>
    <li class="c0">
        <span class="c1">Check the file, check the image</span>
    </li>
    <li class="c0">
        <span class="c1">Upload folder and WWW root</span>
    </li>
</ul>
<p class="c5 c27">
    <span class="c1"><a href="block6/block6_upload.php">Задача: реализовать форму загрузки файла</a></span>
</p>

<h3>Web: Программа обучения: PHP сертификация: 7 Databases</h3>

<p>
    Задача: создать три связанные таблицы (клиенты, товары, заказы); написать запрос, который бы выводил отчет: какой
    клиент сколько заказов сделал и на какую общую сумму.
</p>
<pre>
  CREATE DATABASE test
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

  SET NAMES 'utf8';

  create table client(
    id int not null AUTO_INCREMENT,
    primary key(id),
    name varchar(30) not null,
    surname varchar(30) not null
  );

  create table product(
    id int not null AUTO_INCREMENT,
    primary key(id),
    name varchar(40) not null,
    price DECIMAL(10,2) not null,
    descript TEXT
  );

  create table orders(
    id int not null AUTO_INCREMENT,
    primary key(id),
    id_client int not null,
    id_product int not null,
    foreign key(id_client)
    references client(id),
    foreign key (id_product)
    references product(id),
    descript TEXT
  );

  ЗАПРОС:

  1 вариант
    SELECT CONCAT_WS(  "", c.name, c.surname ) AS whole_name, COUNT( o.id ) , SUM( p.price )
    FROM orders AS o, client AS c, product AS p
    WHERE o.id_client = c.id
    AND o.id_product = p.id
    GROUP BY whole_name

  2 вариант
  SELECT * FROM orders as o
  LEFT JOIN client as c ON o.id_client=c.id
  LEFT JOIN product as p ON o.id_product=p.id;
</pre>


<p>
    Задача: Пример выборки в <a href="block7/block7_mysqli_procedure.php">процедурном</a>и
    <a href="block7/block7_mysqli_object.php">объектом</a> стиле
</p>

<p>
    <a href="block7/block7_pdo_db.php">
        Задача: показать работу с PDO на примере создания таблицы, записи данных, выборки данных, обработки ошибок
    </a>
</p>

<p>
    Задача: реализовать два параллельных скрипта для демонстрации уровней изоляции
    (<a href="block7/block7_transaction.php">первый</a> работает с транзакцией,
    <a href="block7/block7_transaction_konkurent.php">второй</a> читает/меняет задействованные данные).
</p>


<h3>Web: Программа обучения: PHP сертификация: 8 OOP</h3>

<p>
    <a href="block8/block8_obj_refs.php">
        Объяснить как работают ссылки на объект, присвоение объекта разным переменным,
        передача объекта в качестве аргумента, копирование объекта
    </a>
</p>

<p><a href="block8/block8_type_hinting.php">Typehinting</a></p>

<p><a href="block8/block8_late_bind.php">Late static bindings</a></p>

<p><a href="block8/block8_iteration_file_read.php">Задача: реализовать класс построчной обработка файла</a></p>

<p>
    <a href="block8/block8_late_static_singlton.php">
        Задача: реализовать иерархию (наследование) классов-синглтонов
        (защищенный конструктор, объект получаем через метод getInstance)
    </a>
</p>


<p>Задача: реализовать генератор простых чисел</p> src/block8_generators.php

<p><a href="block8/block8_reflection.php">Reflection Пример использования</a></p>

<p><a href="block8/block8_autoload.php">Задача: реализовать свой загрузчик</a></p>

<p><a href="block8/block8_spl.php">Задача: сравнить скорость работы array и SPL array</a></p>

<h3>Web: Программа обучения: PHP сертификация: 10 XML</h3>

<p><a href="block10/simple_xml.php">Задача: реализовать сериализацию (запись и чтение) объекта в xml</a></p>
<h3>Web: Программа обучения: PHP сертификация: 12 Web Features</h3>

<p><a href="block12/upload_image.php">Задача: скачивание картинки средствами PHP</a></p>
<p><a href="block12/sessions.php">Задача: Реализовать свой обработчик сессии</a></p>
</body>
</html>
