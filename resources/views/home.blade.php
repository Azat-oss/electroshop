<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Категории</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .active {
            color: green;
            font-weight: bold;
        }
        .inactive {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Список категорий</h1>

    @if($categories->isEmpty())
        <p>Категорий пока нет.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Дата создания</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if($category->is_active)
                                <span class="active">Активная</span>
                            @else
                                <span class="inactive">Неактивная</span>
                            @endif
                        </td>
                        <td>{{ $category->created_at->format('d.m.Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>