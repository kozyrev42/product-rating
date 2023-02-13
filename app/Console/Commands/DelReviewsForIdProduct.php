<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Review;

class DelReviewsForIdProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:reviews {id}';

    /**
     * The console command description.
     * 
     * Команда удаляет отзывы о продукте по id продукта.
     * 
     * @var string
     */
    protected $description = 'The team removes product reviews by product id';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $idProduct = $this->argument('id');
        
        $result = Review::where('product_id', $idProduct)->delete();

        if ($result) {
            return $this->info('Удалены отзывы у продукта с id ' . $idProduct);
        } else {
            return $this->info('Отзывов у продукта нет');
        }
    }
}
