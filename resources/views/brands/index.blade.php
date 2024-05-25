<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="0" >
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Country</th>
        </tr>   
        @foreach ($brands as $brand)
        <tr>
            <td>
                {{ $brands->id}}
            </td>
            <td>
                {{ $brands->name}}
            </td>
            <td>
                {{ $brands->country}}
            </td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>