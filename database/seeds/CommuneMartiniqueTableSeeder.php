<?php
use Illuminate\Database\Seeder;

class CommuneMartiniqueTableSeeder extends Seeder
{

    public function run()
    {

        foreach ($this->getDatas() as $data) {
            unset($data['code_insee']);
            $data['country_id'] = 136;
            \App\City::create($data);
        }

    }

    private function getDatas()
    {
        return array(
            array('code_insee' => '97201','postal_code' => '97216','name' => 'L\'Ajoupa-Bouillon'),
            array('code_insee' => '97202','postal_code' => '97217','name' => 'Les Anses-d\'Arlet'),
            array('code_insee' => '97203','postal_code' => '97218','name' => 'Basse-Pointe'),
            array('code_insee' => '97234','postal_code' => '97222','name' => 'Bellefontaine'),
            array('code_insee' => '97204','postal_code' => '97221','name' => 'Le Carbet'),
            array('code_insee' => '97205','postal_code' => '97222','name' => 'Case-Pilote'),
            array('code_insee' => '97206','postal_code' => '97223','name' => 'Le Diamant'),
            array('code_insee' => '97207','postal_code' => '97224','name' => 'Ducos'),
            array('code_insee' => '97208','postal_code' => '97250','name' => 'Fonds-Saint-Denis'),
            array('code_insee' => '97209','postal_code' => '97200','name' => 'Fort-de-France'),
            array('code_insee' => '97210','postal_code' => '97240','name' => 'Le François'),
            array('code_insee' => '97211','postal_code' => '97218','name' => 'Grand\'Rivière'),
            array('code_insee' => '97212','postal_code' => '97213','name' => 'Gros-Morne'),
            array('code_insee' => '97213','postal_code' => '97232','name' => 'Le Lamentin'),
            array('code_insee' => '97214','postal_code' => '97214','name' => 'Le Lorrain'),
            array('code_insee' => '97215','postal_code' => '97218','name' => 'Macouba'),
            array('code_insee' => '97216','postal_code' => '97225','name' => 'Le Marigot'),
            array('code_insee' => '97217','postal_code' => '97290','name' => 'Le Marin'),
            array('code_insee' => '97218','postal_code' => '97260','name' => 'Le Morne-Rouge'),
            array('code_insee' => '97233','postal_code' => '97226','name' => 'Le Morne-Vert'),
            array('code_insee' => '97219','postal_code' => '97250','name' => 'Le Prêcheur'),
            array('code_insee' => '97220','postal_code' => '97211','name' => 'Rivière-Pilote'),
            array('code_insee' => '97221','postal_code' => '97215','name' => 'Rivière-Salée'),
            array('code_insee' => '97222','postal_code' => '97231','name' => 'Le Robert'),
            array('code_insee' => '97226','postal_code' => '97227','name' => 'Sainte-Anne'),
            array('code_insee' => '97227','postal_code' => '97228','name' => 'Sainte-Luce'),
            array('code_insee' => '97228','postal_code' => '97230','name' => 'Sainte-Marie'),
            array('code_insee' => '97223','postal_code' => '97270','name' => 'Saint-Esprit'),
            array('code_insee' => '97224','postal_code' => '97212','name' => 'Saint-Joseph'),
            array('code_insee' => '97225','postal_code' => '97250','name' => 'Saint-Pierre'),
            array('code_insee' => '97229','postal_code' => '97233','name' => 'Schœlcher'),
            array('code_insee' => '97230','postal_code' => '97220','name' => 'La Trinité'),
            array('code_insee' => '97231','postal_code' => '97229','name' => 'Les Trois-Îlets'),
            array('code_insee' => '97232','postal_code' => '97280','name' => 'Le Vauclin')
        );
    }
}
