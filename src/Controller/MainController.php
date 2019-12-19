<?php

namespace App\Controller;

use App\Entity\Plato;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/{dish<Pizza|Salad|Noodle>?Pizza}", name="main")
     */
    public function index($dish, $currentPage)
    {
        $plato=$this->getDoctrine()
        ->getRepository(plato::Class)
        ->findBy(['tipo' => $dish]);

        return $this->render('index.html.twig', [
            'titulo' => 'Home',
            'data' => $platos, /*$this->gallery[$dish],*/
            'currentPage' => $currentPage
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig', [
            'titulo'=> 'Contact'
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('about.html.twig', [
            'titulo'=> 'About'
        ]);
    }


    private $gallery=[
        'Pizza' => [
            [
                'img' => '01.jpg',
                'title' => 'Fusce dictum finibus',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' => '$45 / $55',
            ],
            [
                'img' => '02.jpg',
                'title' => 'Aliquam sagittis',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' =>'$65 / $70',
            ],
            [
                'img' => '03.jpg',
                'title' => 'Sed varius turpis',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' => '$30.50',
            ],
            [
                'img' => '04.jpg',
                'title' => 'Aliquam sagittis',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' =>'$25.50',
            ],
            [
                'img' => '05.jpg',
                'title' => 'Maecenas eget justo',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' => '$80.25',
            ],
            [
                'img' => '06.jpg',
                'title' => 'Quisque et felis eros',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' => '$20 / $40 / $60',
            ],
            [
                'img' => '07.jpg',
                'title' => 'Sed ultricies dui',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' => '$94',
            ],
            [
                'img' => '08.jpg',
                'title' => 'Donec porta consequat',
                'description' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'price' =>'$15',
            ],
        ],
        'Salad' => [
            [
                'img' => '04.jpg',
                'title' => 'Salad Menu One',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' => '$25',
            ],
            [
                'img' => '03.jpg',
                'title' => 'Second Title Salad',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' =>'$30',
            ],
            [
                'img' => '05.jpg',
                'title' => 'Third Salad Item',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' => '$45',
            ],
            [
                'img' => '01.jpg',
                'title' => 'Superior Salad',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' =>'$50',
            ],
            [
                'img' => '08.jpg',
                'title' => 'Sed ultricies dui',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' => '$55 / $60',
            ],
            [
                'img' => '07.jpg',
                'title' => 'Maecenas eget justo',
                'description' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
                'price' => '$75',
            ]
        ],
        'Noodle' => [
            [
                'img' => '08.jpg',
                'title' => 'Noodle One',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' => '$12.50',
            ],
            [
                'img' => '07.jpg',
                'title' => 'Noodle Second',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' =>'$15.50',
            ],
            [
                'img' => '06.jpg',
                'title' => 'Third Soft Noodle',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' => '$20.50',
            ],
            [
                'img' => '05.jpg',
                'title' => 'Aliquam sagittis',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' =>'$30.25',
            ],
            [
                'img' => '04.jpg',
                'title' => 'Maecenas eget justo',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' => '$35.50',
            ],
            [
                'img' => '03.jpg',
                'title' => 'Quisque et felis eros',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' => '$40.50',
            ],
            [
                'img' => '02.jpg',
                'title' => 'Quisque et felis eros',
                'description' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'price' => '$40.50',
            ]
        ]
    ];
}
