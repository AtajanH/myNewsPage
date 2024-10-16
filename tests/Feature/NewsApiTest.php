<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\News;

class NewsApiTest extends TestCase
{
    public function testGetNewsById()
    {
        // Создайте тестовую новость
        $news = News::factory()->create();

        // Выполните GET-запрос к API
        $response = $this->get('/api/news/' . $news->id);

        // Проверьте статус-код и содержимое ответа
        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $news->id,
                     'title' => $news->title,
                     'content' => $news->content,
                 ]);
    }

    public function testGetNewsNotFound()
    {
        // Выполните GET-запрос к API с несуществующим ID
        $response = $this->get('/api/news/9999');

        // Проверьте статус-код
        $response->assertStatus(404)
                 ->assertJson(['message' => 'News not found']);
    }
}