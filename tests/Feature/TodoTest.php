<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    // Todoの登録処理テスト
    public function test_can_create_todo(): void
    {
        $title = $this->faker->sentence;
        $message = $this->faker->paragraph;

        $response = $this->post('/todos',[
            'title' => $title,
            'message' => $message,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('todos', [
            'title' => $title,
            'message' => $message,
        ]);
    }
}
