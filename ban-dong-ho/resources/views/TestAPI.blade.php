<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <p></p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        function JSONstringify(json) {
            if (typeof json != 'string') {
                json = JSON.stringify(json, undefined, '\t');
            }

            var
                arr = [],
                _string = 'color:green',
                _number = 'color:darkorange',
                _boolean = 'color:blue',
                _null = 'color:magenta',
                _key = 'color:red';

            json = json.replace(
                /("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g,
                function(match) {
                    var style = _number;
                    if (/^"/.test(match)) {
                        if (/:$/.test(match)) {
                            style = _key;
                        } else {
                            style = _string;
                        }
                    } else if (/true|false/.test(match)) {
                        style = _boolean;
                    } else if (/null/.test(match)) {
                        style = _null;
                    }
                    arr.push(style);
                    arr.push('');
                    return '%c' + match + '%c';
                });

            arr.unshift(json);

            console.log.apply(console, arr);
        }
        $("p").html(JSONstringify({
            a: 123,
            b: "abc",
            c: ["x", 4, "y"],
            d: {
                a: "a",
                b: "b"
            }
        }));
    </script>
</body>

</html>
