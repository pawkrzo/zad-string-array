<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\shuwaxSortowanieType;
use Shuwax\Tools\Sortowanie;


class shuwaxSortowanieController extends Controller
{

    /**
     * @Route("/shuwax/sortowanie/show/form", name="shuwax_sortowanie_show_form")
     */
    public function showFormAction()
    {
        $sortowanie = new Sortowanie();
        $form = $this->createCreateForm($sortowanie);

        return $this->render(
            'AppBundle:shuwaxSortowanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/shuwax/sortowanie/sortuj", name="shuwax_sortowanie_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $sortowanie = new Sortowanie();
        $form = $this->createCreateForm($sortowanie);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:shuwaxSortowanie:wynik.html.twig',
                array('wynik' => $sortowanie->sort())
            );

        }

        return $this->render(
            'AppBundle:shuwaxSortowanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Sortowanie $sortowanie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sortowanie $sortowanie)
    {
        $form = $this->createForm(new shuwaxSortowanieType(), $sortowanie, array(
            'action' => $this->generateUrl('shuwax_sortowanie_wynik'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Sortuj'));

        return $form;
    }


}
