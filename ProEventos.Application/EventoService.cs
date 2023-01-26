using ProEventos.Application.Contratos;
using ProEventos.Domain;
using ProEventos.Persistence.Contratos;
using System;
using System.Threading.Tasks;

namespace ProEventos.Application
{
    public class EventoService : IEventoService
    {
        //CONSTRUTOR PARA INJEÇÃO DE DEPENDENCIA - ATALHO CTOR
        private readonly IGeralPersist _geralPersist;

        private readonly IEventoPersist _eventoPersist;
        
        public EventoService(IGeralPersist geralPersist, IEventoPersist eventoPersist)
        {
            _geralPersist = geralPersist;
            _eventoPersist = eventoPersist;
        }
        //
        public async Task<Evento> AddEventos(Evento model)
        {
            try
            {
                _geralPersist.Add<Evento>(model); // ADICIONANDO LISTA DE EVENTOS NA MODEL
                if (await _geralPersist.SaveChangesAsync())
                {
                    return await _eventoPersist.GetEventoByIdAsync(model.Id, false); //SE AS FOI SALVO RECUPERA O ID DO EVENTO INSERIDO NO BANCO
                }
                return null;
            }
            catch (Exception ex)
            {
                //TRATAMENTO DE ERROS, INCLUSIVE VINDOS DA CAMADA DE PERSISTENCIA
                throw new Exception (ex.Message);
            }
        }
        
        public async Task<Evento> UpdateEvento(int eventoId, Evento model)
        {
            try
            {
                //FALSE PQ NÃO QUERO RETORNAR NINGUEM DE PALESTRANTE
                var evento = await _eventoPersist.GetEventoByIdAsync(eventoId, false); 
                if (evento == null) return null;

                model.Id = evento.Id;

                //FAÇO O UPDATE, SE FOI SALVO CORRETAMENTE, RETORNO QUEM FOI ATUALIZADO
                _geralPersist.Update(model);
                if (await _geralPersist.SaveChangesAsync())
                {
                    return await _eventoPersist.GetEventoByIdAsync(model.Id, false);
                }
                return null;
            }
            catch (Exception ex)
            {
                throw new Exception (ex.Message);
            }
        }

        public async Task<bool> DeleteEvento(int eventoId)
        {
            try
            {
                var evento = await _eventoPersist.GetEventoByIdAsync(eventoId, false);
                if (evento == null) throw new Exception("ID do evento enviado para o delete não foi encontrado.");

                //RETORNA SE FOI DELETADO OU NÃO
                _geralPersist.Delete<Evento>(evento);
                return await _geralPersist.SaveChangesAsync();
            }
            catch (Exception ex)
            {

                throw new Exception(ex.Message);
            }
        }

        public async Task<Evento[]> GetAllEventosAsync(bool includePalestrantes = false)
        {
            try
            {
                var eventos = await _eventoPersist.GetAllEventosAsync(includePalestrantes);
                if (eventos == null) return null;

                return eventos;
            }
            catch (Exception ex)
            {
                throw new Exception(ex.Message);
            }
        }

        public async Task<Evento[]> GetAllEventosByTemaAsync(string tema, bool includePalestrantes = false)
        {
            try
            {
                var eventos = await _eventoPersist.GetAllEventosByTemaAsync(tema, includePalestrantes);
                if (eventos == null) return null;

                return eventos;
            }
            catch (Exception ex)
            {
                throw new Exception(ex.Message);
            }
        }

        public async Task<Evento> GetEventoByIdAsync(int eventoId, bool includePalestrantes = false)
        {
            try
            {
                var eventos = await _eventoPersist.GetEventoByIdAsync(eventoId);
                if (eventos == null) return null;

                return eventos;
            }
            catch (Exception ex)
            {
                throw new Exception(ex.Message);
            }
        }
    }
}
