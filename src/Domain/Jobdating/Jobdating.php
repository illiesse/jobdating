<?php
declare(strict_types=1);

namespace App\Domain\Jobdating;

use JsonSerializable;

class Jobdating implements JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $user1;

    /**
     * @var string
     */
    private $user2;

    /**
     * @var int
     */
    private $date;

    /**
     * @param int|null  $id
     * @param string    $name
     * @param string    $place
     * @param string    $user1
     * @param string    $user2
     * @param int       $date
     */
    public function __construct(?int $id, string $name, string $place, string $user1, string $user2, int $date)
    {
        $this->id = $id;
        $this->name = ucfirst($name);
        $this->place = ucfirst($place);
        $this->user1 = ucfirst($user1);
        $this->user2 = ucfirst($user2);
        $this->date = $date;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getJobdatingname(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getJobdatingPlace(): string
    {
        return $this->place;
    }

    /**
     * @return string
     */
    public function getJobdatingUsers(): string
    {
        return $this->user1;
        return $this->user2;
    }

    /**
     * @return string
     */
    public function getJobdatingDate(): string
    {
        return $this->date;
    }

    /**
     * @param object $datas
     * @return bool
     */
    public function update(object $datas): bool
    {
        $response = false;
        foreach ($datas as $k => $v) {
            if (!empty($this->{$k}) && $this->{$k} !== $v) {
                $this->{$k} = $v;
                $response = true;
            }
        }
        return $response;
    }

     /**
     * @param object $datas
     * @return bool
     */
    public function delete()
    {

    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'place' => $this->place,
            'user1' => $this->user1,
            'user2' => $this->user2,
            'date' => $this->date,
        ];
    }
}
