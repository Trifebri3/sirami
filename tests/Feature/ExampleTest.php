<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('renders bukti referensi page successfully with exact URL', function () {
    $response = $this->get('/bukti-referensi');

    $response->assertStatus(200);
    $response->assertInertia(fn ($page) => $page
        ->component('Public/BuktiReferensi')
        ->has('buktiReferensi')
        ->has('documents')
    );
});
