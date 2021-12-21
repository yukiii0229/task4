<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <p>{{$txt}}</p>
  <form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <th>名前</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
      <tr>
        <th>メール</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>