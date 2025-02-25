<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold text-gray-700 mb-4">ユーザー一覧</h1>
        <table class="w-full border-collapse bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Age</th>
                    <th class="py-3 px-4 text-left">Gender</th>
                    <th class="py-3 px-4 text-left">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-gray-800">{{ $member->name }}</td>
                    <td class="py-3 px-4 text-gray-800">{{ $member->age }}</td>
                    <td class="py-3 px-4 text-gray-800">{{ $member->gender }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ route('members.show', $member->id) }}" class="text-blue-600 hover:text-blue-800">detail link</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
