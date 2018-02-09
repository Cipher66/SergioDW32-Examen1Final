<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    </head>
    <body>
        <form action="calculo" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="dividendo" />
            <input type="text" name="divisor" />
            <input type="submit" value="Calcular"/>
        </form>
    </body>
</html>
