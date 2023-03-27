package com.users.users.controller;

import com.users.users.Model.User;
import com.users.users.repository.UserRepository;
import jakarta.persistence.EntityNotFoundException;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/users")
public class UserController {
    @Autowired
    private UserRepository userRepository;

    @GetMapping("/")
    public List<User> getAllUsers() {
        return userRepository.findAll();
    }

    @PostMapping("/")
    public User createUser(@RequestBody User user) {
        return userRepository.save(user);
    }

    @GetMapping("/{id}")
    public User getUserById(@PathVariable Integer id) {
        return userRepository.findById(id).orElseThrow(() -> new EntityNotFoundException("User not found with id " + id));
    }

    @PutMapping("/{id}")
    public User updateUser(@PathVariable Integer id, @RequestBody User user)
    {
        User existingUser = userRepository.findById(id).orElseThrow(() -> new EntityNotFoundException("User not found with id " + id));
        existingUser.setNombre(user.getNombre());
        existingUser.setApellido1(user.getApellido1());
        existingUser.setApellido2(user.getApellido2());
        existingUser.setEmail(user.getEmail());
        existingUser.setTelefono(user.getTelefono());
        existingUser.setGenero(user.getGenero());
        existingUser.setFNacimiento(user.getFNacimiento());
        existingUser.setNPadre(user.getNPadre());
        existingUser.setNMadre(user.getNMadre());
        existingUser.setNHermanos(user.getNHermanos());
        existingUser.setAdulto(user.getAdulto());
        return userRepository.save(existingUser);
    }

    @DeleteMapping("/{id}")
    public void deleteUser(@PathVariable Integer id) {
        userRepository.deleteById(id);
    }
}