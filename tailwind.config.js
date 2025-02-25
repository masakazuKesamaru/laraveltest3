import { join } from 'path'
import flowbitePlugin from 'flowbite/plugin'

export default {
  content: [
    // Laravel Blade テンプレート
    './resources/**/*.blade.php',
    // 任意の JS / Vue / React ファイルなど
    './resources/**/*.js',
    './resources/**/*.vue',
    // Flowbite のコンポーネントを取り込む
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      // 必要に応じてテーマ拡張
    },
  },
  plugins: [
    flowbitePlugin
  ],
}
