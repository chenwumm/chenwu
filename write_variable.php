<?php
// 获取POST过来的变量
$variable = $_POST['variable'] ?? '';
 
// 检查变量是否非空
if (!empty($variable)) {
    // 指定文件路径和名称
    $filePath = 'path/to/your/file.txt';
 
    // 尝试将变量内容写入文件
    if (file_put_contents($filePath, $variable)) {
        // 成功写入文件后的响应
        echo json_encode(['status' => 'success', 'message' => 'Variable written to file.']);
    } else {
        // 写入文件失败的响应
        echo json_encode(['status' => 'error', 'message' => 'Failed to write to file.']);
    }
} else {
    // 变量为空的响应
    echo json_encode(['status' => 'error', 'message' => 'Variable is empty.']);
}
?>
