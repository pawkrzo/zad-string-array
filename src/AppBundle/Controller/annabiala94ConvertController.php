<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94ConvertType;
use annabiala94\Tools\Convert;


class annabiala94ConvertController extends Controller
{

    /**
     * @Route("/annabiala94/convert/show/form", name="annabiala94_convert_show_form")
     */
    public function showFormAction()
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);

        return $this->render(
            'AppBundle:annabiala94Convert:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/convert/calc", name="annabiala94_convert_run")
     * @Method("POST")
     */
    public function convertAction(Request $request)
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);
        $f->handleRequest($request);

        if ($f->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Convert:wynik.html.twig',
                array('po_konwersji' => $c->toarabic())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Convert:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Convert $convert The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convert $conv)
    {
        $form = $this->createForm(new annabiala94ConvertType(), $conv, array(
            'action' => $this->generateUrl('annabiala94_convert_run'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }

}
