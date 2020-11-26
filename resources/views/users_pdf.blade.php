<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <center>
        <h2>Daftar User</h2>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($users as $u)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td><img width="75px" height="75px" src="{{'storage/'.$u->profile}}" ></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>