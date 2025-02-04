<?php

use App\Entities\Post;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class PostTest extends ProjectTestCase
{
    private Post $post;

    protected function setUp(): void
    {
        parent::setUp();

        $this->post = new Post([
            'title'  => 'A Simple Post',
            'slug'   => 'a-simple-post',
            'date'   => date('Y-m-d', strtotime('-1 week')),
            'author' => 'Ian Fleming',
            'tags'   => 'Blog, releases',
        ]);
    }

    public function testLink()
    {
        $this->assertSame(site_url('Blog/a-simple-post'), $this->post->link());
    }

    public function testLinkNoSlug()
    {
        $this->post->slug = null;

        $this->assertSame(site_url('Blog/'), $this->post->link());
    }

    public function testGetTagsNoData()
    {
        $this->post->tags = null;

        $this->assertSame([], $this->post->getTags());
    }

    public function testGetTags()
    {
        $this->assertSame(['Blog', 'releases'], $this->post->getTags());
    }
}
