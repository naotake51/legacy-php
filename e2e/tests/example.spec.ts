import { test, expect } from '@playwright/test';

test('create sample', async ({ page }) => {
  await page.goto('samples/index.php');

  // 新規作成ページへ移動
  await page.getByRole('link', { name: '新規作成' }).click();
  expect(await page.screenshot()).toMatchSnapshot();

  // 新規サンプルを作成
  await page.getByRole('textbox', { name: '名前:' }).fill('テストサンプル');
  await page.getByRole('button', { name: '作成' }).click();

  // 一覧ページへリダイレクトされて、新しいサンプルが表示されていることを確認
  expect(await page.screenshot()).toMatchSnapshot();
});
