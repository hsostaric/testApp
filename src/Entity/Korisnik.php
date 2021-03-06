<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KorisnikRepository")
 */
class Korisnik implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aktivacijskiKod;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aktiviran;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prezime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lozinkaBackUp;

    /**
     * @ORM\Column(type="integer" )
     */
    private $pokusajPrijave = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    private $blokiran = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAktivacijskiKod(): ?string
    {
        return $this->aktivacijskiKod;
    }

    public function setAktivacijskiKod(?string $aktivacijskiKod): self
    {
        $this->aktivacijskiKod = $aktivacijskiKod;

        return $this;
    }

    public function getAktiviran(): ?bool
    {
        return $this->aktiviran;
    }

    public function setAktiviran(bool $aktiviran): self
    {
        $this->aktiviran = $aktiviran;

        return $this;
    }

    public function getIme(): ?string
    {
        return $this->Ime;
    }

    public function setIme(string $Ime): self
    {
        $this->Ime = $Ime;

        return $this;
    }

    public function getPrezime(): ?string
    {
        return $this->Prezime;
    }

    public function setPrezime(?string $Prezime): self
    {
        $this->Prezime = $Prezime;

        return $this;
    }

    public function getLozinkaBackUp(): ?string
    {
        return $this->lozinkaBackUp;
    }

    public function setLozinkaBackUp(string $lozinkaBackUp): self
    {
        $this->lozinkaBackUp = $lozinkaBackUp;

        return $this;
    }

    public function getPokusajPrijave(): ?int
    {
        return $this->pokusajPrijave;
    }

    public function setPokusajPrijave(int $pokusajPrijave): self
    {
        $this->pokusajPrijave = $pokusajPrijave;

        return $this;
    }

    public function getBlokiran(): ?bool
    {
        return $this->blokiran;
    }

    public function setBlokiran(bool $blokiran): self
    {
        $this->blokiran = $blokiran;

        return $this;
    }
}
