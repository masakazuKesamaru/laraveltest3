<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー詳細</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold text-gray-700 mb-4">ユーザー詳細</h1>
        <p><strong>Name:</strong> {{ $name }} : ID {{ $id }}</p>
        <a href="{{ route('members') }}" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">戻る</a>
    </div>
</body>
</html>
